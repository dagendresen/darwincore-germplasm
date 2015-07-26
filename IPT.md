# Introduction #

The Darwin Core extension for germplasm makes the GBIF Integrated Toolkit relevant for sharing datasets from the genetic resources community.

### GBIF Integrated Publishing Toolkit (IPT) ###
http://code.google.com/p/gbif-providertoolkit/


## JAVA and Tomcat ##
You will need Java and an application server like for example the Apache Tomcat installed.

  * Java,  http://developers.sun.com/downloads/
  * Apache Tomcat,  http://tomcat.apache.org/download-60.cgi

```
prompt$ java -version
prompt$ $CATALINA_HOME/bin/version.sh
```

## Java environment settings ##
You should have JAVA\_HOME and CATALINA\_HOME set for your environment. [URL](http://en.wikipedia.org/wiki/Environment_variable)


```
export JAVA_HOME=/YOUR_JAVA_LIBRARY_PATH_HERE/Java/Home (eg: /Library/Java/Home)
export CATALINA_HOME=/YOUR_TOMCAT_DIRECTORY_PATH_HERE/tomcat/Home (eg: /usr/local/tomcat/Home)
```

The default memory assigned to Java is not enough to run Tomcat. My example below assign 0.5 GB as start up memory, max 1 GB as maximum memory and also an increased Maximum permanent memory. 128 MB permanent memory works fine for me and increase the stability of the Tomcat significantly. [URL](http://wiki.apache.org/tomcat/FAQ/Memory)

```
export JAVA_OPTS="-Xms512M -Xmx1024M -XX:MaxPermSize=128M"
```

## IPT Installation ##

  * Download the IPT toolkit and the Geoserver library from the IPT project home [URL](http://code.google.com/p/gbif-providertoolkit/) [URL](http://code.google.com/p/gbif-providertoolkit/downloads/list).
  * Rename the IPT war file as ipt.war and drop in the webapps folder of tomcat (or use the tomcat admin interface to deploy the ipt.war).
  * Same with the geoserver library if not already installed for your system.
  * Navigate with your web browser to http://localhost:8080/ipt/
  * Login with username admin and password admin



---


## Further comments ##

The default memory allocated to Java and thus to Tomcat is very low and need to be adjusted upwards for the IPT (or any Java application through Tomcat) to work properly.

To adjust the memory for Java to a higher level use the environment variable JAVA\_OPTS. The initial java heap size (xms) and the maximum java heap size (xmx) can be set by the following setting:

```
export JAVA_OPTS="-Xms512M -Xmx1024M"
```

This is my setting for my laptop. For the server at NordGen we allocate more memory. The memory need to be an exact number of bytes. I suggest to Google for more information. Or read the IPT documentation.

But still after adjusting the heap memory up, the IPT was still unstable. Jose suggested to set MaxPermSize in addition to the heap size. This worked very well on the server. On the laptop I find this really consumes a lot of memory from other things and I rather prefer to restart the Tomcat when it gets stuck instead... ;-)

```
export JAVA_OPTS="-Xms512M -Xmx1024M -XX:MaxPermSize=512M"
```

CATALINA\_OPTS will also work fine - assigning more memory to Tomcat (rather than in general to Java).

```
export CATALINA_OPTS="-Xms512M -Xmx1024M -XX:MaxPermSize=512M"
```

Both PermSize and MaxPermSize could be useful... Anyway the MaxPermSize setting made wonders for the stability of the IPT at NordGen.

```
export CATALINA_OPTS="-Xms512M -Xmx1024M -XX:PermSize=512M -XX:MaxPermSize=1024M"
```

On the laptop (MacBook) I am setting this in my .bash\_profile - as I log in as myself and the system is running as me. On the server we read these variables into the environment. Typing the above command on a running Linux server would work fine, but need to be typed again after restart - so better to add to a script during startup. One option is of course simply to add this line to the Tomcat startup script...

If you have more memory, all the numbers above could be adjusted upwards. The example above is more the minimum I found to work ok on the laptop.