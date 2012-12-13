# 
# genericQuery.py
# Created by Chris Fortier
# Initial build 10/9/2012

# This function is used as a generic interface to the specified mongoDB database. 
# 

import sys
import logging

logging.basicConfig(filename='load_file.log', level=logging.DEBUG, format='%(asctime)s %(message)s')

def query(statement, environment, fetchOutput, update):
	#declare username and password
	#user = 'jharvard'
	#password = 'crimson'

	#declare environments:
	envProduction = 'ec2-50-17-59-106.compute-1.amazonaws.com'
	envTest = 'localhost'
	
	#determine which environment is active
	if environment == "PROD":
		environmentString = envProduction
		#database = 'test'
	else:
		environmentString = envTest
		#database = 'test_transit'
	try:
		#connect to server
		import pymongo
		con = MongoClient(environmentString, 27017)
		
		#execute statement
		try:
			cur.execute(statement)
		except MySQLdb.Warning as e:
			print('There was a MySQL warning: %s' %(e))
			logging.info(e) 
		except MySQLdb.Error as e:
			print('There was a MySQL error: %s' %(e))
			logging.info(e) 
		except RuntimeError as e:
			print('There was a RuntimeError: %s' %(e))
			logging.info(e) 
		except TypeError as e:
			print('There was a TypeError: %s' %(e))
			logging.info(e) 
			
		#code for query == true
		if fetchOutput:
			#output for query
			tempOutput = cur.fetchall()
			output = tempOutput
			#print output
	
		#code for update == true
		if update:
			con.commit()
			output = "Commit complete"

		#close cursor and connection
		cur.close()
		con.close()	
		
	#except cx_Oracle.DatabaseError:
	#	output = -1
	
	except NameError: #(cx_Oracle.DatabaseError):
		output = "NameError"		

		
	return output
	


#tempOut = query("select version();", 'PROD', True, False)
#print ", ".join(map(str, tempOut[0]))
