# Temperature-and-Humidity-Data-logging-II
Logging temperature and humidity data to cloud (ex: AWS) using ESP8266 Nodemcu and DHT11 Sensor


### Components required:
  * ESP8266 NODEMCU
  
  * DHT11/DHT22 Temperature and Humidity Sensor
  
  * Breadboard(if required)
  
  * Connecting wires or jumper wires

### Pre-requisites:
 * Arduino IDE [get it here](https://arduino.en.softonic.com/)
 
 * You need to manually add DHT library to Arduino IDE as it is not included by default. You can ignore it if you have already included it. Otherwise you can do it following the     steps below.<br>
      a).Open Arduino IDE <br>
      b).Go to Sketch >> Include Library >> Manage Libraries <br>
      c).Search for DHT sensor library and install it

* Nodemcu is not detected by default in Arduino IDE. Therefore, you must install Additional Board Manager Url(http://arduino.esp8266.com/stable/package_esp8266com_index.json).     <br>
  Go to File >> Preferences.  Paste the link provided above in "Additional Board Manager Urls".<br>
  Then go to Tools >> Board >> Board Manager. Search for esp8266 library and install it. <br>
  Then select NodeMCU 1.0(ESP-12 Module) in Tools >> Board with respective Port.
  
### Connections:
  * Data pin of DHT11 to D2(GPIO) of NodeMCU.<br>
  
  * VCC of DHT11 to 3V supply of NodeMCU
  
  * Ground of DHT11 to ground of NodeMCU
  
  
