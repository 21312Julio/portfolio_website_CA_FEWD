# Portfolio Project - Front End Development Class DORSET COLLEGE

Created by Julio Costa Beyeler 21312

# Project Summary

For this project I will be building an interactive web resume using HTML, CSS and JavaScript. This module helped me to better understand the 
information architecture and guidelines that should be followed when creating a website apart from design. Furthermore, this project in
specific allowed me to better understand how HTML, CSS and JS interact with each other when coding, and how can I utilize them to their 
max potential. Being the concept a resume, I decided to show my personality through the website as much as possible, and below you can find
my develpment process and different ideas I had along the way.

## Development Process

### For Starters - Initial Ideas

### Webpages, layout and structures

* Three pages which would be an About Me (where I would briefly talk about me), Curriculum (insert my experiences and allow for download), and 
Contact Me (the user would be able to contact me through the website and know where else they can find me).
* Target Audience - Anyone interested in my work, such as recruiters for example or anyone who whishes to collaborate with me in a 
project.
* Colours - I wanted to create a website that matched my art style, hence being black and white, but including colorful elements that complimented 
the design and caught the user's attention (#020202, #D9D9D9, Gradient).
* Font - Courier Prime.
* Header - Logo would be located beneath the top of the page with the navigation bar directly under it, both being the same size.
* Background - Black background with a edited portrait on the right side of the page, in a fixed position.

### Coding the layout and structure

* For coding I used VS Code with the Live Server extensions so that I could visualize how the page was going to look like in real time,
opening it in a local server updating it everytime I saved the code.
* Since all three pages would have the same layout for header and background, I started by positioning the portrait edit and header logo,
since they would act as a guide of where to position the rest of the elements. Beneath the header logo, I positioned the navigation bar, with
the three different pages.
* Once I had the main.css file and default structure ready, I started adding the elements for the about me page, which would be introduction text.
* For the curriculum page, I wanted to input the main elements of my CV which were my education and work experience, as well as my skills, which I added an
image to illustrate them and created a CSS hover effect so that whenever the user hovers over it, a text comes up with the name of each skill.
* Lastly, I added a Contact Me page, with text fields, a submit button and image links for my other social media. 

### Core Functions

* On the about me page, I added beneath the introductory text an embedded Spotify playlist using HTML.
* On the curriculum page, I added a button so that the user would be able to download a .PDF version of my CV, a file that was stored inside 
the webpage documents.
* For the contact me forms, I used the Netflify forms HTML, so I would receiver the messages in my home page at the host.
* I added a animation keyframe on css for a changing gradient background which I applied on the navigation bar, as padding on the playlist,
as well as on the download and send buttons.
* I personalized the scroll bar using JavaScript and CSS animation keyframes.

### Final Touches

* Added comments on the files to explain the purpose of each code.
* Organized the css files, so that all code that the pages would share was in a single file, and specific modifications would have a separate file
with the name of the page title. I set up a different .CSS file for the scrollbar as well.
* Posting the code on GitHub and hosting on Netlify.

### Problems

* I firstly planned on using PHP code on the contact form to send the information directly to my email, but it wasn't working properly and was getting
overly complicated. Instead, I used the Netlify forms feature that only required me to add a name tag to each form element and a piece of code inside
the form tag. 
* The website doesn't respond properly on mobile devices, so in the meanwhile it is only responsive on desktop web browsers. 
* The elements weren't being displayed properly on the page at the position they were supposed to at certain moments, since I decided to go
with a different approach to their organization having the nav-bar below the header logo for example.

### Low-Fidelity Prototype
#### AboutMe Page

![](/prototype/aboutmelowfidelity.PNG)

#### Curriculum Page

![](/prototype/curriculumlowfidelity.PNG)

#### ContactMe Page

![](/prototype/contactmelowfidelity.PNG)

### High-Fidelity Prototype

* https://www.figma.com/file/5An5bxTf4na89ZwWyoKuha/Portfolio-Website?node-id=0%3A1

#### AboutMe Page

![](/prototype/About Me Prototype 1.PNG)
![](/prototype/About Me Prototype 2.PNG)

#### Curriculum Page

![](/prototype/CV Prototype 1.PNG)
![](/prototype/CV Prototype 2.PNG)

#### ContactMe Page

![](/prototype/Contact Me Prototype 1.PNG)
![](/prototype/Contact Me Prototype 2.PNG)
