Introduction to Python for Archival Data Management
======
Myeong Lee
-------

### Python: a Programming Language
- Scripting language (high-level).
- Relatively easy to learn (compared to C, C++, or Java).
- Widely used in many fields (from software development to data analytics).
- Many libraries available.
- Generally faster than R or SPSS.
- Object-oriented programming supported.
- Django framework for web development.

### Python IDEs (Integrated Development Environment)
- Pydev with Eclipse
- PyCharm
- Sublime Text
- Spyder
- Emacs
- VIM
- ...

### Jupyter: A Web-based Interactive Development Environment for Python
- Markdown supported: can export a well-styled document to various formats such as a HTML file.
- Line-by-line coding supported. Especially this is useful for data manipulations using Python.
- Graphical libraries can be directly used (while traditional Python IDEs do not provide graphics on its own). 
- Code on Jupyter can be exported to a genuine Python file (if needed).

### Folk This Repository and Clone It
To get you start with Python exercises, this repository has some Python scripts. As you learned from the Git session, try to folk this repository to your account. 

1. Click `Folk` on this Git repo webpage.
2. Go to your folked repo page, and copy the address of the repo.
3. Open your command line tool.
4. Clone your folked repo to your PC using the `git clone` command. 
4. Now, you have all the files from this repository.

### Launching Jupyter Notebook
1. Open your command line tool (e.g., Terminal, Git Shell)
2. Go to the folder that you want to work on. In this exercise, you can go to `python/ex1/notebook/` using the `cd` command.
3. Type `jupyter notebook` and hit enter.
4. Then, a web browser will be automatically opened. 

### Exercise 0: "Hello World"
1. In the Jupyter page, click the "new" button, and select "Python 3".
2. Then, a new tab is opened and you are ready for writing Python code.
3. In the block, type:


	```
	print ("hello world")
	```
4. Then, hit `Shift + Enter`
5. It outputs "hello world".
6. Try typing, `23 + 45` and hit `Shift + Enter`
7. It outputs 68.

### An Important Check Point: Python Version
Many Python libraries and existing codes available on the Internet are written in Python 2.x, while Python 3.x was introduced long ago. Some syntax and methods are different from each other. So, when using other's code or libraries, make sure that you're using the same version of Python. For today's exercise, we're using Python 3.5 that comes with [Anaconda](https://www.continuum.io/anaconda-overview), an open source package that contains useful software for data science. 

For advanced users: Anaconda's ["Virtual Environment"](https://uoa-eresearch.github.io/eresearch-cookbook/recipe/2014/11/20/conda/) feature allows you to switch between different Python versions easily on the command line.

### [Go to Exercise 1](ex1/) <br /> [Go to Exercise 2](ex2/)
