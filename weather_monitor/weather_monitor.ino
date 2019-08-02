#include <dht.h>
#include <DHT.h>
dht DHT;
#define DHT11_PIN 10
int rainpin=A0;

#include <SFE_BMP180.h>
#include <Wire.h>
SFE_BMP180 pressure;
#define ALTITUDE 90.0

void setup(){
  Serial.begin(9600);
}

void loop()
{

/*
  int chk = DHT.read11(DHT11_PIN);
  int sensorValue = analogRead(A0);
  Serial.print("Humidity = ");
  Serial.println(DHT.humidity);
  Serial.print("Temperature = ");
  Serial.println(DHT.temperature);
  Serial.print("Rainfall = ");
  Serial.println(sensorValue);*/


int chk = DHT.read11(DHT11_PIN);
  int sensorValue = analogRead(A0);
  //Serial.print("Humidity = ");
  Serial.print(DHT.humidity);
   Serial.print(",");
  //Serial.print("Temperature = ");
  Serial.print(DHT.temperature);
  Serial.print(",");
  //Serial.print("Rainfall = ");
  Serial.print(sensorValue);
  Serial.print(",");
  Serial.println(" ");

 */
 
  delay(2000);  // Pause for 5 seconds.

}

