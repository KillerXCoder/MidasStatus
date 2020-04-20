import mysql.connector
from mcstatus import MinecraftServer
#===================================================================
# Názov: Skript pre ziskanie online hracov [CREATIVE, VANILLA]
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
	creative = MinecraftServer.lookup("")
	status = creative.status()
except:
	sql = "UPDATE online_hraci SET online = '0' WHERE server = 'Creative'"
	mycursor.execute(sql)
	mydb.commit()
else:
	sql = "UPDATE online_hraci SET hraci = '" + str(status.players.online)  + "' WHERE server = 'Creative'"
	mycursor.execute(sql)
	mydb.commit()
	sql = "UPDATE online_hraci SET online = '1' WHERE server = 'Creative'"
	mycursor.execute(sql)
	mydb.commit()

	
try:
	vanilla = MinecraftServer.lookup("")
	status = vanilla.status()
except:
	sql = "UPDATE online_hraci SET online = '0' WHERE server = 'Vanilla'"
	mycursor.execute(sql)
	mydb.commit()
else:
	sql = "UPDATE online_hraci SET hraci = '" + str(status.players.online)  + "' WHERE server = 'Vanilla'"
	mycursor.execute(sql)
	mydb.commit()
	sql = "UPDATE online_hraci SET online = '1' WHERE server = 'Vanilla'"
	mycursor.execute(sql)
	mydb.commit()