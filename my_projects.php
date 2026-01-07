<!DOCTYPE html>
<!-- Author: P Singh, Last Updated 3/30/2023 -->
<html>
<?php session_start();?> 
<?php include('Inc/head.php')?>
<body>
<?php include('Inc/nav.php')?>
<header class = "center"> <h1>My Projects</h1></header>
<hr class = "first_hr">
<main>
<section>
<h2>C++</h2>
<article>
I used C++ to build simple applications and learn general programming concepts.
<br><br>
This first project is a program that stores multiple records into a binary file 
and then uses different commands to show/manipulate this data. This project helped me 
learn more about data and binary files. It also helped me learn how to write and read 
information about binary files. I would change this program to allow users to input their 
data, making it more useful to users.
</article>
<br>
<img id = "p1_border" src="Pictures/Singh_P_Projects1.PNG" alt="Binary File Project" width="400">
 <br>
<article>
<br>This second project allows users to enter seven rents and do things with this data. This
includes sorting the data, outputting the data, summing the rents, and displaying the memory locations where
the data is stored. This project allowed me to practice pointers as I passed pointers to 
functions and not the variables themselves. The project also allowed me to practice sorting.
I would change the program to where the user can specify how many rents they want to enter.  
</article>
<br>
<img id = "p2_border" src="Pictures/Project2.PNG" alt="Pointers File Project" width="400">
</section>
<hr>
<section>
<h2>Python</h2>
<article>
I have used Python for data analysis.
 <br><br>
This project is a Juypter Notebook that outputs different graphs based on a
COVID-19 dataset. This project has helped me learn Numpy for arrays, 
Matplotlib for graphing, and Pandas for making datasets and cleaning data. It has also
helped me explain data from the graphs which is true data analysis. 
</article>
<img src="Pictures/Project3.PNG" alt="Data Analysis Project" width="600">
</section>
<hr>
<section>
<h2>Access Database</h2>
<article>
I have used Microsoft Access to build relational databases.
 <br><br>
This project is an Access database where it managed all sorts of information such as, 
employee info, company info, product info, etc. It also had forms for user input, reports
for easy printouts, and queries that select and order the data in a specific way. This
the project allowed me to improve my database design skills and allowed me to work with a 
the person on a client basis. 
</article>
<img src="Pictures/Project4.PNG" alt="Database Project" width="800">
</section>
</main>
<hr>
<?php include('Inc/footer.php')?>
</body>
</html>