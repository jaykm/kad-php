# kad-php
Allows KissanimeDownloader to be used from a website. Get KissanimeDownloader from https://github.com/Manwholikespie/KAD

# FAQ
Q: I am new to python, php, and webservers. Will I be able to use kad-php?

A: No

Q: My website, suckywebsitethatkad-phpwillmakebetter.com, doesn't use the same format as yours does. How do I change this?

A: Remove the otf (font) files, and change the style.css file to yours


Q: Ok, but I am using wordpress. Where is my style.css file?

A: I don't care. Make a real website.

# Setup

kad-php does not work right out of the box. You need to post information to download.php from your index file or whatever the user goes to. Here is an example:
> ```html
<form action="kad-php/download.php" method="post">
Anime URL: <input type="text" name="url">
<input type="submit" value="Submit">
```
This is assuming that download.php is in the folder kad-php. Change as necessary.

In download.php, there is a variable called $location. This is where KissanimeDownloader will save the files. Change as necessary, but make sure the directory exists before using it.
