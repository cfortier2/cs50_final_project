
# Chris Fortier final project
# This file loads all of the .txt files in to the database
#


import logging
import sys
import fileinput
import csv
import time
import os
import pymongo
from pymongo import MongoClient

logging.basicConfig(filename='load_file.log', level=logging.DEBUG, format='%(asctime)s %(message)s')

def load(agency):
	
	#start timer
	startTime = time.time()

	#verbose mode
	verbose = False
	
	#logging
	logging.info("Starting " + agency )
	
	#make connection - remote
	#con = MongoClient('ec2-50-17-59-106.compute-1.amazonaws.com', 27017)
	
	#make connection - local
	con = MongoClient()

	#connect to database
	db = con.transit
	#db = con.test

	#each file in agency directory
	path = '/home/ec2-user/db/gtfs_loader/agencies/' + str(agency) + '/'
   	dirList = os.listdir(path)
   
   	#total_counter
	total_counter = 0

	#work with each file
	for gtfs_file in dirList:
	    #check that it is a .txt file
		if (os.path.splitext(gtfs_file)[1] == '.txt'):

			#open gtfs file
			gtfs_data = csv.DictReader(open(path + gtfs_file, 'r'), delimiter=',')		
	    
			#store file name as collection
			collection_name = os.path.splitext(gtfs_file)[0]
			collection = db[collection_name]
			print collection_name
			logging.info(collection)


			#create dictionary entry for agency
			agency_dict = {'agency_key': agency}
			#print agency_dict

			#empty collection
			collection.remove()

			#counter for number of items
			counter = 0

			#read each line of file and insert into database
			for row in gtfs_data:
				#print row
			
				#combine the dictionary for agency key with the data rows
				merged_data = dict(agency_dict.items() + row.items())

				#inset into database
				collection.insert(merged_data)

				#counter
				counter += 1

			#print stats
			print "loaded: " + str(counter) + " elements.\n"

			#add counter
			total_counter += counter

    #stop timer and print
	endTime = time.time()
	diffTime = endTime - startTime
	print("There were %d elements in %f seconds for an average of %f elements per second." % (total_counter, diffTime, total_counter/diffTime) + '\n')
	logging.info(agency + ": " + str(total_counter) + " elements in " + str(diffTime) + " seconds. " + str(counter/diffTime) + " elements per second.")
    

agency = raw_input("\nAgency/Directory: ")  		
load(agency)
logging.info(agency + " complete." )
