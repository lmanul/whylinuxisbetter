---
lang: en

title: No backdoors in your software.
---

The difference between "closed source" (proprietary) and "open 
source" software is (how did you guess?) that their "source" is open. 
Huh, okay, why do I care? Well, the "source", or "source code", is like 
the secret <b>recipe</b> of every software, like the recipe of a cake. 
When you buy a cake, there's no way you can figure out the exact recipe 
(although you can guess bits and pieces, "there's some coconut in 
here"). If a bakery gave out the recipe for its super-sucessful 
cheesecake, it would soon go out of business because people would bake 
it for themselves, at home, and stop buying it. Likewise, Microsoft does 
not give out the recipe, or "source code", of their software, like 
Windows, and rightly so because that's what they make their money 
from.

The problem is they can put <i>whatever they want</i> in their 
recipe, without us knowing. If they want to add a bit of code saying 
"every 12th of the month, if the computer is online, create a list of 
all the files that have been downloaded in this computer since last 
month, and send it back to Microsoft through the network". Microsoft 
probably doesn't do that, but <i>how would you know</i>, since 
everything is closed, invisible, secret?

A little while ago (October 2008) a lot of Chinese Windows users 
(most of them buy pirated copies of Windows) saw something strange 
happen with their computer: every hour, their screen would go black for 
a few seconds. Nothing to really prevent you from working, but it can 
easily make you go nuts. Microsoft had added a bit of code (an 
ingredient to the recipe) saying "if this is detected as a pirated copy 
of Windows, make the screen black for a few seconds, every hour". Now 
the point is not that the software was pirated: pirating software is 
bad, period. The point is that these users got an automatic update for 
Windows (updates usually fix bugs and add new features) without knowing 
how it would affect their system. No one knew.

Changing the source code of open source software is a much more open 
process. By definition, all the recipes are public. It doesn't matter to 
you since you won't be able to understand the code anyway, but people 
who understand it can read it, and speak out. And they often do. Every 
time someone wants to change the source code, all other developers are 
able to see the change ("hey man, why did you add this code spying on 
the user's keyboard input, are you out of your mind?"). And even if the 
whole team of maintainers for a piece of software go crazy and start 
adding puppy-killing features all over their source code, someone 
outside the team can very well take the code, remove all the bad bits, 
create a whole new version of it, and let the world know what the 
difference is. It's <i>open</i>.

That's why you can be sure open source software doesn't do bad things 
behind your back: the community keeps a close eye on all the 
recipes.




