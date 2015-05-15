#!/bin/bash

#Test le contenu des paramètres. Lance la vidéo Yt si OK.
if [ "-n" "$1" ]
then
	omxplayer -o hdmi $(youtube-dl -t -f 22 -g $1)
fi

if [ "-n" "$2" ]
then
	omxplayer -o hdmi $(youtube-dl -t -f 22 -g $2)
fi

if [ "-n" "$3" ]
then
	omxplayer -o hdmi $(youtube-dl -t -f 22 -g $3)
fi

if [ "-n" "$4" ]
then
	omxplayer -o hdmi $(youtube-dl -t -f 22 -g $4)
fi

if [ "-n" "$5" ]
then
	omxplayer -o hdmi $(youtube-dl -t -f 22 -g $5)
fi

if [ "-n" "$6" ]
then
	omxplayer -o hdmi $(youtube-dl -t -f 22 -g $6)
fi

if [ "-n" "$7" ]
then
	omxplayer -o hdmi $(youtube-dl -t -f 22 -g $7)
fi

if [ "-n" "$8" ]
then
	omxplayer -o hdmi $(youtube-dl -t -f 22 -g $8)
fi

if [ "-n" "$9" ]
then
	omxplayer -o hdmi $(youtube-dl -t -f 22 -g $9)
fi

