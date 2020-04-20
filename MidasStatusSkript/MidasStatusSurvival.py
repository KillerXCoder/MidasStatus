import mysql.connector
from mcstatus import MinecraftServer
#===================================================================
# Názov: Skript pre ziskanie online hracov [SURVIVAL]
# Autor: KillerXCoder (Peter Federl)
# E-Mail: peter.federl@gmail.com
#===================================================================
mydb = mysql.connector.connect(
  host="",
  user="",
  passwd="",
  database=""
)
mycursor = mydb.cursor()

try:
	survival = MinecraftServer.lookup("")
	status = survival.status()
except:
	sql = "UPDATE online_hraci SET online = '0' WHERE server = 'Survival'"
	mycursor.execute(sql)
	mydb.commit()
else:
	sql = "UPDATE online_hraci SET hraci = '" + str(status.players.online)  + "' WHERE server = 'Survival'"
	mycursor.execute(sql)
	mydb.commit()
	sql = "UPDATE online_hraci SET online = '1' WHERE server = 'Survival'"
	mycursor.execute(sql)
	mydb.commit()
