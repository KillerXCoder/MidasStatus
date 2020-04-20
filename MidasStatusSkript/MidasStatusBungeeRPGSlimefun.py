import mysql.connector
from mcstatus import MinecraftServer
#===================================================================
# Názov: Skript pre ziskanie online hracov [BUNGEE, RPG, SLIMEFUN]
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
	bungee = MinecraftServer.lookup("")
	status = bungee.status()
except:
	sql = "UPDATE online_hraci SET online = '0' WHERE server = 'Bungee'"
	mycursor.execute(sql)
	mydb.commit()
else:
	sql = "UPDATE online_hraci SET hraci = '" + str(status.players.online)  + "' WHERE server = 'Bungee'"
	mycursor.execute(sql)
	mydb.commit()
	sql = "UPDATE online_hraci SET online = '1' WHERE server = 'Bungee'"
	mycursor.execute(sql)
	mydb.commit()

	
	
try:
	RPG = MinecraftServer.lookup("")
	status = RPG.status()
except:
	sql = "UPDATE online_hraci SET online = '0' WHERE server = 'RPG'"
	mycursor.execute(sql)
	mydb.commit()
else:
	sql = "UPDATE online_hraci SET hraci = '" + str(status.players.online)  + "' WHERE server = 'RPG'"
	mycursor.execute(sql)
	mydb.commit()
	sql = "UPDATE online_hraci SET online = '1' WHERE server = 'RPG'"
	mycursor.execute(sql)
	mydb.commit()



try:
	Slimefun = MinecraftServer.lookup("")
	status = Slimefun.status()
except:
	sql = "UPDATE online_hraci SET online = '0' WHERE server = 'Slimefun'"
	mycursor.execute(sql)
	mydb.commit()
else:
	sql = "UPDATE online_hraci SET hraci = '" + str(status.players.online)  + "' WHERE server = 'Slimefun'"
	mycursor.execute(sql)
	mydb.commit()
	sql = "UPDATE online_hraci SET online = '1' WHERE server = 'Slimefun'"
	mycursor.execute(sql)
	mydb.commit()
	
	
