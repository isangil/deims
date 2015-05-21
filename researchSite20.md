## Content Type Research Site Changes ##

### From _Geo_ to _Open Layers_ ###

We think that using the Drupal contributed module _Open Layers_ (OL) instead of the contrib module we are using, _geo_, we will benefit in these ways:
  * OL seems to have more support, and more users
  * OL works with several map servers
  * Ability to do bounding boxes (Well Known Text and on map polygon tool)
  * Less buggy

### How does it work? ###

> Install Open Layers, configure the basics (The module page at http://drupal.org/project/openlayers has good instructions on how to do this).  Once you have your key and your map server of choice, you need to work with the "Well Known Text (WTK)" convention to enter coordinates.

> The way I learned the WTK is by using the hand tools from the map.

This is how the form would look like for the new _research site_ :
![http://deims.lternet.edu/splash.png](http://deims.lternet.edu/splash.png)

As you can see, this is similar to the form for the "research site" content type we currently have, except now you see the map, where you can also edit directly. Also, notice the box to place the bounding box coordinates (no need to be a square!)

To see the controlled format, let's use the map -- first notice the icons on the upper right side of the map
![http://deims.lternet.edu/mapPolygonIcon.png](http://deims.lternet.edu/mapPolygonIcon.png)

Click on the closed polygon icon (the pen is for a single point (or lat-lon) and the hand is to pan... After you click, then you can draw your polygon with successive clicks... double click to close your polygon. In the case of the Plum Island, I drew this polygon
![http://deims.lternet.edu/pieExample.png](http://deims.lternet.edu/pieExample.png)

Notice that coordinates appear in the bounding box!  Pay attention to the format used --IM zooming here:
![http://deims.lternet.edu/editWTK.png](http://deims.lternet.edu/editWTK.png)

You can of course edit those coordinated by hand, and not use the map tool.  You just need to follow that format of GEOMETRYCOLLECTION(POLYGON((lat1 lon1, lat2 lon2, .... , latN lonN)))

That is all.

Ah, here is an excerpt of the BDP/FGDC that produces (similar to EML)

![http://deims.lternet.edu/ol2dbp.png](http://deims.lternet.edu/ol2dbp.png)