import nltk
import csv
import numpy
import pandas as pd
import string
from nltk import sent_tokenize, word_tokenize, pos_tag
from nltk.tokenize import sent_tokenize, word_tokenize
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
from Sastrawi.StopWordRemover.StopWordRemoverFactory import StopWordRemoverFactory
from Sastrawi.Dictionary.ArrayDictionary import ArrayDictionary
from Sastrawi.StopWordRemover.StopWordRemover import StopWordRemover

class StopWordRemoverFactory(object):
    """description of class"""

    def create_stop_word_remover(self):
        stopWords = self.get_stop_words()
        dictionary = ArrayDictionary(stopWords)
        stopWordRemover = StopWordRemover(dictionary)

        return stopWordRemover

    def get_stop_words(self):
        return ['yang', 'untuk', 'pada', 'ke', 'para', 'namun', 'menurut', 'antara', 'dia', 'dua', 'ia', 'seperti', 'jika', 
                'sehingga', 'kembali', 'dan', 'tidak', 'ini', 'karena', 'kepada', 'oleh', 'saat', 'harus', 'sementara', 
                'setelah', 'belum', 'kami', 'sekitar', 'bagi', 'serta', 'di', 'dari', 'telah', 'sebagai', 'masih', 'hal',
                'ketika', 'adalah', 'itu', 'dalam', 'bisa', 'bahwa', 'atau', 'hanya', 'kita', 'dengan', 'akan', 'juga', 'ada', 
                'mereka', 'sudah', 'saya', 'terhadap', 'secara', 'agar', 'lain', 'anda', 'begitu', 'mengapa', 'kenapa', 'yaitu',
                'yakni', 'daripada', 'itulah', 'lagi', 'maka', 'tentang', 'demi', 'dimana', 'kemana', 'pula', 'sambil',
                'sebelum', 'sesudah', 'supaya', 'guna', 'kah', 'pun', 'sampai', 'sedangkan', 'selagi', 'sementara', 'tetapi', 
                'apakah', 'kecuali', 'sebab', 'selain', 'seolah', 'seraya', 'seterusnya', 'tanpa', 'agak', 'boleh', 'dapat', 
                'dsb', 'dst', 'dll', 'dahulu', 'dulunya', 'anu', 'demikian', 'tapi', 'ingin', 'juga', 'nggak', 'mari', 'nanti', 
                'melainkan', 'oh', 'ok', 'seharusnya', 'sebetulnya', 'setiap', 'setidaknya', 'sesuatu', 'pasti', 'saja', 'toh', 
                'ya', 'walau', 'tolong', 'tentu', 'amat', 'apalagi', 'bagaimanapun', '!', '@', '#', '$', '%', '^', '&', '*', '(',
                ')', '_', '-', '=', '+', '[', ']', '{', '}', ';', ':', ',', '.', '<', '>', '?', '/', '|', 'a', 'b', 'c', 'd', 'e',
                'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']

class StopWordRemover(object):
    """description of class"""

    def __init__(self, dictionary):
        self.dictionary = dictionary

    def get_dictionary(self):
        return self.dictionary

    def remove(self, text):
        """Remove stop words."""
        words = text.split(' ')
        stopped_words = [word for word in words if not self.dictionary.contains(word)]

        return ' '.join(stopped_words)


from Sastrawi.Stemmer.Filter import TextNormalizer
class CachedStemmer(object):
    """description of class"""
    def __init__(self, cache, delegatedStemmer):
        self.cache = cache
        self.delegatedStemmer = delegatedStemmer

    def stem(self, text):
        normalizedText = TextNormalizer.normalize_text(text)

        words = normalizedText.split(' ')
        stems = []

        for word in words:
            if self.cache.has(word):
                stems.append(self.cache.get(word))
            else:
                stem = self.delegatedStemmer.stem(word)
                self.cache.set(word, stem)
                stems.append(stem)

        return ' '.join(stems)
    
    def get_cache(self):
        return self.cache


import re
from Sastrawi.Stemmer.Context.Visitor.VisitorProvider import VisitorProvider
from Sastrawi.Stemmer.Filter import TextNormalizer
from Sastrawi.Stemmer.Context.Context import Context

# Stemmer
class Stemmer(object):
    """Indonesian Stemmer.
    Nazief & Adriani, CS Stemmer, ECS Stemmer, Improved ECS.
    @link https://github.com/sastrawi/sastrawi/wiki/Resources
    """
    def __init__(self, dictionary):
        self.dictionary = dictionary
        self.visitor_provider = VisitorProvider()

    def get_dictionary(self):
        return self.dictionary

    def stem(self, text):
        """Stem a text string to its common stem form."""
        normalizedText = TextNormalizer.normalize_text(text)

        words = normalizedText.split(' ')
        stems = []

        for word in words:
            stems.append(self.stem_word(word))

        return ' '.join(stems)

    def stem_word(self, word):
        """Stem a word to its common stem form."""
        if self.is_plural(word):
            return self.stem_plural_word(word)
        else:
            return self.stem_singular_word(word)

    def is_plural(self, word):
        #-ku|-mu|-nya
        #nikmat-Ku, etc
        matches = re.match(r'^(.*)-(ku|mu|nya|lah|kah|tah|pun)$', word)
        if matches:
            return matches.group(1).find('-') != -1

        return word.find('-') != -1

    def stem_plural_word(self, plural):
        """Stem a plural word to its common stem form.
        Asian J. (2007) "Effective Techniques for Indonesian Text Retrieval" page 76-77.
        @link   http://researchbank.rmit.edu.au/eserv/rmit:6312/Asian.pdf
        """
        matches = re.match(r'^(.*)-(.*)$', plural)
        #translated from PHP conditional check:
        #if (!isset($words[1]) || !isset($words[2]))
        if not matches:
            return plural
        words = [matches.group(1), matches.group(2)]

        #malaikat-malaikat-nya -> malaikat malaikat-nya
        suffix = words[1]
        suffixes = ['ku', 'mu', 'nya', 'lah', 'kah', 'tah', 'pun']
        matches = re.match(r'^(.*)-(.*)$', words[0])
        if suffix in suffixes and matches:
            words[0] = matches.group(1)
            words[1] = matches.group(2) + '-' + suffix

        #berbalas-balasan -> balas
        rootWord1 = self.stem_singular_word(words[0])
        rootWord2 = self.stem_singular_word(words[1])

        #meniru-nirukan -> tiru
        if not self.dictionary.contains(words[1]) and rootWord2 == words[1]:
            rootWord2 = self.stem_singular_word('me' + words[1])

        if rootWord1 == rootWord2:
            return rootWord1
        else:
            return plural

    def stem_singular_word(self, word):
        """Stem a singular word to its common stem form."""
        context = Context(word, self.dictionary, self.visitor_provider)
        context.execute()

        return context.result


import os
from Sastrawi.Dictionary.ArrayDictionary import ArrayDictionary
from Sastrawi.Stemmer.Stemmer import Stemmer
from Sastrawi.Stemmer.CachedStemmer import CachedStemmer
from Sastrawi.Stemmer.Cache.ArrayCache import ArrayCache

class StemmerFactory(object):
    """ Stemmer factory helps creating pre-configured stemmer """
    APC_KEY = 'sastrawi_cache_dictionary'

    def create_stemmer(self, isDev=False):
        """ Returns Stemmer instance """

        words = self.get_words(isDev)
        dictionary = ArrayDictionary(words)
        stemmer = Stemmer(dictionary)

        resultCache = ArrayCache()
        cachedStemmer = CachedStemmer(resultCache, stemmer)

        return cachedStemmer

    def get_words(self, isDev=False):
        #if isDev or callable(getattr(self, 'apc_fetch')):
        #    words = self.getWordsFromFile()
        #else:
        #    words = apc_fetch(self.APC_KEY)
        #    if not words:
        #        words = self.getWordsFromFile()
        #        apc_store(self.APC_KEY, words)
        return self.get_words_from_file()

    def get_words_from_file(self):
        current_dir = os.path.dirname(os.path.realpath(__file__))
        dictionaryFile = current_dir + '/data/kata-dasar.txt'
        if not os.path.isfile(dictionaryFile):
            raise RuntimeError('Dictionary file is missing. It seems that your installation is corrupted.')

        dictionaryContent = ''
        with open(dictionaryFile, 'r') as f:
            dictionaryContent = f.read()

        return dictionaryContent.split('\n')


# Stopword
factory = StopWordRemoverFactory()
stopword = factory.create_stop_word_remover()

# Open atau baca .csv
data = pd.read_csv('tbl_keluhan.csv')
reader = data['keluhan'].str.lower() 

for line in reader:
    stop = stopword.remove(line)

    print(stop)

# Tokenize
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
factory = StemmerFactory()
stemmer = factory.create_stemmer()
 
data = pd.read_csv('tbl_keluhan.csv')
reader = data['keluhan'].str.lower() 

for line in reader:
    katadasar = stemmer.stem(line)
    stop = stopword.remove(katadasar)
    tokens = nltk.tokenize.word_tokenize(stop)

    print(tokens)


# Koneksi ke Database
import mysql.connector
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="sjm"
)
mycursor = mydb.cursor()

factory = StemmerFactory()
stemmer = factory.create_stemmer()
factory = StopWordRemoverFactory()
stopword = factory.create_stop_word_remover()

# factory = StemmerFactory()
# stemmer = factory.create_stemmer()

# Insert ke Database 
data = pd.read_csv('tbl_keluhan.csv')
reader = data['keluhan'].str.lower() 
labels = data['penanganan']    
perangkat = data['perangkat']

for i in range (len(data)):
    katadasar = stemmer.stem(reader[i])
    stop = stopword.remove(katadasar)
    tokens = nltk.tokenize.word_tokenize(stop)

    sql = "INSERT INTO tbl_proses (id_proses, keluhan, perangkat, normalisasi, penanganan) VALUES (%s, %s, %s, %s, %s)"

    val = ("", reader[i], perangkat[i], stop, labels[i])

    mycursor.execute(sql, val)
    mydb.commit()
