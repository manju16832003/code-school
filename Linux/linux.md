# Linux Commands

### Copy

`cp [OPTION] SOURCE DEST`

`cp originFile newFile`

`cp -i oldfile newfile` --> if newfile already exists, you will be prompted

`cp file /directory/sub/`  --> Copy a file into another directory

`cp originalfile /dir/subdir/newfile` --> Copy a file into another directory, and give it a new name

`cp file* /dir/subdir/`  --> Copy multiple files into another directory, using a wildcard

`cp -a /source/. /dest/`  --> -a = Improved recursion option, that preservers all the file attributes, and also preservers symlinks 


Reference: https://www.computerhope.com/unix/ucp.htm


### Loop through gz files and unzip

for z in *.gz; do gunzip "$z"; done

### Create a bootable USB stick on MacOS

https://tutorials.ubuntu.com/tutorial/tutorial-create-a-usb-stick-on-macos#0


### Telnet SMTP

`telnet smtp.gmail.com 587`

`tracepath smtp.gmail.com`

### File Operations

`touch abc.txt`

Delete all files with the extension

`find . -name "*.bak" -type f -delete`
 
 OR

 `find . -name "*.bak" -type f`


 ## Sha-bang

 https://en.wikipedia.org/wiki/Shebang_(Unix)

