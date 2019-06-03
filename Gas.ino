#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
const char *ssid =  "hotspot";     // replace with your wifi ssid and wpa2 key
const char *pass =  "";
const char* host = "192.168.43.9";
WiFiClient client;

void setup()
{
  Serial.begin(115200);
  delay(10);
  Serial.println("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid);
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");
}

void loop()
{
 HTTPClient http; 

 int value1=analogRead(0);
  const int httpport = 80;
  if (!client.connect(host, httpport)) {
    Serial.println("connection failed");
    return;
  }
  else {
    Serial.println("connected");
  }


String url = "/gas/database.php?data="+value1;

  client.print(String("GET ") + url + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" +
               "Connection: close\r\n\r\n");
  String section = "header";
  String line;
  while (client.available()) {
    line = client.readStringUntil('\r');


  }
  Serial.println(line);
  
 Serial.println(value1);
  delay(30000);
}