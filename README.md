# Glenn's Discord Invite
A customizable Discord invite modal for your streams! 

### Requirements

* Web server running PHP
* An image/gif hosted online (can be on the same server)
* Streaming software that supports browser/web sources
* A Twitch/YouTube/FB Gaming audience (just kidding)

### Usage
The script accepts 3 variables for the invite: `name`, `invite`, and `icon`.  These don't have to, but should match your actual server.
* Name: The name of your server
* Invite: The invite code of your server (the part after "discord.gg/")
* Icon: The server icon.  Can be static or animated.  You can also use the Discord CDN for icons.

Fill in the variables in this fashion, crafting a link:
* Name: My Cool Server
* Invite: abcdefg
* Icon: https://picsum.photos/200

`https://www.yourserver.com/path/to/invite.php?name=My%20Cool%20Server&invite=abcdefg&icon=https://picsum.photos/32`

The size of the modal is 352 by 65 pixels.  Set this in your streaming software, otherwise you will see ugly text below the invite.

The generated result will be a combination of text, your image, and CSS to make it all look pretty.

### Support

Drop an issue or email me: glenn@glennjam.in
