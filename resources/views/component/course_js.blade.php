{{-- Javascript Contents --}}

@if ($mat === 'overview')
    <h1 class="c_content_title1">JavaScript Overview</h1>
    <p class="lead">Welcome to the JavaScript course, where you will learn the programming language that is used for web developers as the logic for the web pages.</p>
    <p>In this course, we are going to assume that you are already finished or understood the 2 other languages which are HTML and CSS. If you still do not understand HTML and CSS, you can check our course which are <a href="/course">Web Design : HTML & CSS</a> course and then you can come back here. Also in JavaScript, semicolon (;) is not needed as it can read and run each line of code.</p>

    <h1 class="fs-4 mt-5 mb-3">JavaScript Setup</h1>
    <p>To practice JavaScript, we need a application to run it on, and on this course, we are going to use Visual Studio Code because it is a popular application. After downloading Visual Studio Code, you can create a new folder called “test” to put the JavaScript and the HTML. Then you can create 2 files name “index.html” for the content of the web and “index.js” for the file where we are going to use.</p>
    
    <h1 class="fs-4 mt-5 mb-3">Course Outline</h1>
    <div class="row g-4">
        <div class="col-xl-3 col-md-6">
            <a href="/course/javascript/connecting" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Connecting HTML to JS</strong>
                <span class="text-secondary">Learn how to connect HTML to JS</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/javascript/io-types" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">I/O & Data Types</strong>
                <span class="text-secondary">Learn each Data Type and how to input or output</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/javascript/operators" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Operators</strong>
                <span class="text-secondary">Learn how to utilize operator statements</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/javascript/conditions" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Conditions</strong>
                <span class="text-secondary">Learn how to create condition statements</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/javascript/loop" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Looping & Break</strong>
                <span class="text-secondary">Learn how to create loops and break them in JavaScript</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/javascript/array" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Array</strong>
                <span class="text-secondary">Learn how to create and utilize array</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/javascript/function" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Function</strong>
                <span class="text-secondary">Learn how to create and use functions in JavaScript</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/javascript/method" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Method</strong>
                <span class="text-secondary">Learn how to use built in method</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/javascript/class" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Class & Object</strong>
                <span class="text-secondary">Learn how to create and implement class & object in JavaScript</span>
            </a>
        </div>
    </div>
@elseif ($mat === 'connecting')
    <h1 class="c_content_title1">Connecting HTML to JavaScript</h1>
    <p class="lead">To use JavaScipt inside your HTML page, first you have to connect both of them.</p>

    <p class="mb-2">To connect HTML to JavaScript, there are two ways to do it :</p>
    <li class="mb-1">Internal</li>
    <li class="mb-1">External</li>
    <h1 class="fs-4 mt-5 mb-3">Internal JavaScript</h1>
    <p>If you are going for internal JavaScript, first you need to add a <code>{{'<script>'}}</code> tag that can be put in <code>{{'<head>'}}</code> or <code>{{'<body>'}}</code>. Keep in mind that HTML code will read from top to bottom so to run the <code>{{'<script>'}}</code>, you must put it at the bottom of the <code>{{'<body>'}}</code> tag or use a function (<a href="/course/javascript/function">JavaScript Function</a>) in the <code>{{'<head>'}}</code> tag to run. The first picture below is an example of putting the <code>{{'<script>'}}</code> tag in the <code>{{'<body>'}}</code> and the second picture shows putting the <code>{{'<script>'}}</code> tag in the <code>{{'<head>'}}</code>. In both <code>{{'<script>'}}</code>, we are using <code>document.getElementById</code> to get the id from the <code>{{'<p>'}}</code> tag to a new variable and getting the HTML property of the id by using <code>.innerHTML</code>.</p>
    <p>Example JS inside the <code>{{'<body>'}}</code> tag :</p>
    <img src="/assets/images/js_connect-1.svg" alt="" class="w-100">
    <p class="mt-3">Example JS inside the <code>{{'<head>'}}</code> tag :</p>
    <img src="/assets/images/js_connect-2.svg" alt="" class="w-100">

    <h1 class="fs-4 mt-5 mb-3">External JavaScript</h1>
    <p>If we want to do external JavaScript, we also need to use the <code>{{'<script>'}}</code> tag but we must add inside the <code>{{'<script>'}}</code> tag a path to the JavaScript file which is <code>{{'<script src="">'}}</code>. In our example, we'll put the path as "./index.js" (you can also put “index.js" to “./” just mean that it move back the directory once to see all the file available in the folder) and now we can do JavaScript in “index.js”.</p>
    <p>Example :</p>
    <img src="/assets/images/js_connect-3.svg" alt="" class="w-100">
    <p class="mt-3">In “index.js”, we are going to make a function that will change the content of the id when clicked and <code>console.log()</code> to indicate that the function has started. We also use “.innerHTML” to change the id's content.</p>
    <p>Example :</p>
    <img src="/assets/images/js_connect-4.svg" alt="" class="w-100">

    <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just connected your JS to HTML</h1>
@elseif ($mat === 'io-types')
    <h1 class="c_content_title1">I/O, Variable, and Data Types</h1>
    <p class="lead">To start producing something through JavaScript we first have to know about I/O, Variable, and Data Types in JavaScript.</p>

    <p>In JavaScript, there are three types of variables :</p>
    <li class="mb-1"><code>var</code> (Global variable) which means it can be accessed from outside block of code.</li>
    <li class="mb-1"><code>let</code> (Local variable) which means it cannot be accessed from outside block of code.</li>
    <li class="mb-1"><code>const</code> (Constant variable) which is a variable that cannot be changed from anywhere after being declared.</li>

    <p class="mt-2">Each of these variables can hold any of the datatypes available (String, Number, Boolean, Object, Symbol / Characters, Null, Undefined). To print the variables in JavaScript, we are going to use <code>console.log()</code> like in the previous tutorial and checking the console by pressing “F12” and finding the Console tab. In the example below, we are going to create multiple <code>var</code>, one <code>let</code>, one <code>const</code> and try to print all of the variables into <code>console.log()</code>.</p>
    <p>Example :</p>
    <img src="/assets/images/js_io-1.svg" alt="" class="w-100">
    <p class="mt-3">We created multiple vars with different value and also one each for let and const. In this code, we are going to use <code>try</code> and <code>catch</code> which works by running the try block of code and if it didn't work, it will run the catch block of code. We can see that both let and const print their own <code>console.log()</code> in the catch block of code.</p>
    <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned I/O, Variable, and Data Types in JavaScript</h1>
@elseif ($mat === 'operators')
    <h1 class="c_content_title1">Operators</h1>
    <p class="lead">We already setup a value in a variable but the value can be changed by initializing a new value or using operators. </p>
    <p>Operators are divided into 5 types :</p>
    <li>Arithmetic</li>
    <li>Assignment</li>
    <li>Comparison</li>
    <li>String</li>
    <li>Logical</li>

    <p class="fs-4 mt-5 mb-3">Arithmetic Operators</p>
    <p>Arithmetic operators consists of :</p>
    <li class="mb-1">Addition (+) <i class="bi bi-arrow-right-short"></i> Adds 2 values together : <code>x + y</code></li>
    <li class="mb-1">Subtraction (-) <i class="bi bi-arrow-right-short"></i> Subtracts 2 variables value together : <code>x - y</code></li>
    <li class="mb-1">Multiplication (*) <i class="bi bi-arrow-right-short"></i> Multiplies 2 variables value together : <code>x * y</code></li>
    <li class="mb-1">Exponentiation (**) <i class="bi bi-arrow-right-short"></i> Returns the value of variable 1 to the power of variable 2. : <code>2**5</code> = 2^5</li>
    <li class="mb-1">Division (/) <i class="bi bi-arrow-right-short"></i> Returns the value of division : <code>x / y</code></li>
    <li class="mb-1">Module (%) <i class="bi bi-arrow-right-short"></i> Returns the remaining value of division : <code>x % y</code></li>
    <li class="mb-1">Increment (++) <i class="bi bi-arrow-right-short"></i> adds the value variable by 1 : <code>x++</code></li>
    <li class="mb-1">Decrement (--) <i class="bi bi-arrow-right-short"></i> which subtracts the value variable by 1 : <code>x--</code></li>
    <p class="mt-2">In the code below, we are testing each assignment operators and printing them via the <code>console.log()</code></p>
    <img src="/assets/images/js_op-1.svg" alt="" class="w-100">

    <p class="fs-4 mt-5 mb-3">Assignment Operators</p>
    <p>Assignment Operators work almost the same way as Arithmetic Operators. The only difference is the format :</p>
    <li class="mb-1">Arithmetic addition <i class="bi bi-arrow-right-short"></i> <code>x + y</code></li>
    <li class="mb-1">Assignment addition <i class="bi bi-arrow-right-short"></i> <code>x += y</code></li>
    <p class="mt-1">x += y can be interpreted as x = x + y where it adds the value y with value of the previous x to make a new x</p>
    <li class="mb-1">Subtraction <i class="bi bi-arrow-right-short"></i> <code>x -= y</code></li>
    <li class="mb-1">Multiplication <i class="bi bi-arrow-right-short"></i> <code>x *= y</code></li>
    <li class="mb-1">Division <i class="bi bi-arrow-right-short"></i> <code>x /= y</code></li>
    <li class="mb-1">Module <i class="bi bi-arrow-right-short"></i> <code>x %= y</code></li>
    <li class="mb-1">Exponentiation <i class="bi bi-arrow-right-short"></i> <code>x **= y</code></li>
    <p class="mt-2">In the code below, we are using one of the assignment operator and changing the value of x from 5 to 7 because <code>x += y</code> which means that <code>x = x(5) + y (2)</code>.</p>
    <img src="/assets/images/js_op-2.svg" alt="" class="w-100">

    <p class="fs-4 mt-5 mb-3">Comparison Operators</p>
    <p>Comparison Operators are used to compare 2 values. This is the operators that are used a lot as the guide to the end path of a code. The return value of a comparison can be 0 ( <code>false</code> ) or 1 ( <code>true</code> ). Below are the type of comparison :</p>
    <li class="mb-1">Equal to <i class="bi bi-arrow-right-short"></i> <code>==</code></li>
    <li class="mb-1">Not equal <i class="bi bi-arrow-right-short"></i> <code>!=</code></li>
    <li class="mb-1">Greater than <i class="bi bi-arrow-right-short"></i> <code>></code></li>
    <li class="mb-1">Less than <i class="bi bi-arrow-right-short"></i> <code><</code></li>
    <li class="mb-1">Greater than or equal to <i class="bi bi-arrow-right-short"></i> <code>>=</code></li>
    <li class="mb-1">Less than or equal to <i class="bi bi-arrow-right-short"></i> <code><=</code></li>
    <p class="mt-2">Example :</p>
    <img src="/assets/images/js_op-3.svg" alt="" class="w-100">
    <p class="mt-3">In the code above, we are comparing value x and y to see if it's equal to, greater than, and greater than or equal to with random values.</p>

    <p class="fs-4 mt-5 mb-3">String Operators</p>
    <p>String Operators are the same as Arithmetic and Comparison Operators but it works for string where before are only for numbers.</p>
    <p>Example :</p>
    <img src="/assets/images/js_op-4.svg" alt="" class="w-100">
    <p class="mt-3">In the code above, we are checking if variable x is smaller than variable y. If we are comparing string or characters with operator, it will convert the value into number via ASCII Table. In this scenario, the character “5” has a decimal value of 53 while character “A” has a decimal value of 65 so it is true.</p>
    <p>The other <code>console.log()</code> is trying to add the number 5 and the value of variable y. It returns as a value of string because the number 5 is converted into character “5”.</p>

    <p class="fs-4 mt-5 mb-3">Logical Operators</p>
    <p>Logical Operators are usually used to check two statements that contains comparison operators if it is true or not. There are 3 types of logic :</p>
    <li class="mb-1">And (<code>&&</code>) <i class="bi bi-arrow-right-short"></i> which returns <code>true</code> if both statements are true.</li>
    <li class="mb-1">Or (<code>||</code>) <i class="bi bi-arrow-right-short"></i> which returns <code>true</code> if one of the statements is true.</li>
    <li class="mb-1">Not (<code>!</code>) <i class="bi bi-arrow-right-short"></i> which reverse the result of the logic by returning <code>false</code> if the result is <code>true</code>.</li>
    <p>Example :</p>
    <img src="/assets/images/js_op-5.svg" alt="" class="w-100">
    <p class="mt-3">In the code above, first we check if both statements are true and because it is, we print out true. The second one, only one of the statement is true but because we are using OR ( <code>||</code> ), it prints out true. The final one it returns false because we are using NOT ( <code>!</code> ) which reverses the true to false.</p>
    <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Operators in JavaScript</h1>
@elseif ($mat === 'conditions')
    <h1 class="c_content_title1">Conditions</h1>
    <p class="lead">In a program, we mostly utilize choices to run something. We use conditions to code choices and results inside a program.</p>

    <p class="mt-4">Conditions are used to validate the 2 values between 2 variables using logical and comparison operators. It is commonly used to make the logic of the code when it runs. There are 4 statement in conditions :</p>
    <li class="mb-1">"<code>if</code>" is the start of the condition statement where it will run it's line of code if the condition is true.</li>
    <li class="mb-1">"<code>else</code>" is the final of the condition statement where it will run it's line of code if it is the final statement because the condition is false.</li>
    <li class="mb-1">"<code>else if</code>" is a new condition statement between "if” and "else” to validate after the first condition is false.</li>
    <li class="mb-1">"<code>switch</code>" ” is a statement that contains cases. These cases can be assigned values where the line of code will be run if it is true. Each of the cases must also be assigned <code>break</code> (will be explained in <a href="/course/javascript/loop" class="text-primary">Looping & Break</a> ) because if not, the code is going to read all the cases from the start of the assigned <code>case</code> to the bottom of the switch.</li>
    <p class="mt-3 mb-1">The syntax format of condition is :</p>
    <p><code>if (condition) {<br>"Line of code here"<br>}</code></p>
    <p>Example :</p>
    <img src="/assets/images/js_cond-1.svg" alt="" class="w-100">
    <p class="mt-3">In this picture we are testing the conditions. On the first <code>if</code>, it returns because the condition is met so it <code>console.log()</code> the inside code of <code>if</code>. On the second <code>if</code>, it does not run the inside code because the condition is met. Instead it runs the second <code>if</code> which is the <code>else if</code> and it runs the <code>console.log()</code> because it is true.</p>
    <p>After the <code>if</code> conditions are done, we start a <code>switch</code> using the value of variable y and it runs case 2 because the value of the case is the same as the variable and it runs the inside code. It prints the output and also stop the <code>switch</code> condition so that it does not run the code below which is <code>default</code>.</p>
    <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Conditions in JavaScript</h1>
@elseif ($mat === 'loop')
    <h1 class="c_content_title1">Looping and Break</h1>
    <p class="lead">To run a code multiple times or determined times inside a program we must first learn about looping functions.</p>

    <p>There are two general use of loop function which are :</p>
    <li class="mb-1">While loop</li>
    <li class="mb-1">For loop</li>

    <p class="fs-4 mt-5 mb-3">While Loop</p>
    <p>"While looping” works almost the same as conditions except it will keep running the statement if the condition is met. "While looping” also has another form which is do/while looping where it will do the line of code first and then check the condition to see if it can run the line of code inside the "do” again.</p>
    <p class="mb-1">While loop syntax format :</p>
    <p><code>while (condition) {<br>"Line of code here"<br>}</code></p>
    <p>Example :</p>
    <img src="/assets/images/js_loop-1.svg" alt="" class="w-100">
    <p class="mt-3">In the picture above, we are going to run <code>while</code> loop and <code>do while</code> loop using the same variable. The <code>while</code> loop runs only once because the condition is not met after running once. The <code>do while</code> loop runs the code first and then check the condition. Because the condition is also the same as the while loop, it stops.</p>

    <p class="fs-4 mt-5 mb-3">For Loop</p>
    <p class="mb-1">"For Looping” is another type of looping where its syntax are :</p>
    <p class="mb-3"><code>for (statement 1; statement 2; statement 3) {<br>"Line of code here"<br>}</code></p>
    <li class="mb-1">Statement 1 is the variable declared with the value.</li>
    <li class="mb-1">Statement 2 is the condition for the looping to run.</li>
    <li class="mb-1">Statement 3 is ran every time the line of code is already ran.</li>
    <p class="mt-3">Example :</p>
    <img src="/assets/images/js_loop-2.svg" alt="" class="w-100">
    <p class="mt-3">This code runs for 10 times because we give the starting value of <code>i</code> as 0 and increment the value <code>i</code> by 1 with <code>i++</code> every time it finishes running the line of code inside the loop.</p>

    <p class="fs-4 mt-5 mb-3">Break/Continue</p>
    <p class="mb-1">Break or Continue can be used inside a looping for either stopping the looping fully or just once.</p>
    <p>Below are the example of using <code>break</code> or <code>continue</code> :</p>
    <img src="/assets/images/js_loop-3.svg" alt="" class="w-100">
    <p class="mt-3">In this code, if the value of 'i' reaches 5, it will break once ( <code>continue</code> ) and not printing the <code>console.log()</code>. The next condition is if the value of 'i' reaches 7, it will <code>break</code> the looping fully and not proceeding more than 7.</p>
    <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Looping in JavaScript</h1>
@elseif ($mat === 'array')
    <h1 class="c_content_title1">Array</h1>
    <p class="lead">Array is a collection of multiple value inside of a single variable.</p>

    <p>You do not need to declare the size of the array because the variable knows the array size by counting the amount of value inside which is called index. When counting index, it starts from 0 and not 1 because computer always start from 0 as it is more efficient.</p>
    <p>Example :</p>
    <img src="/assets/images/js_array-1.svg" alt="" class="w-100">
    <p class="mt-3">In the code above, we are declaring an array variable called number with the value of 1, 2, 3, and 4. Then we <code>console.log()</code> the size of the array and also the number on index 2.</p>
    <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Array in JavaScript</h1>
@elseif ($mat === 'function')
    <h1 class="c_content_title1">Function</h1>
    <p class="lead">In order to create a predetermined group of code that can execute something inside a program we need to create something called function</p>

    <p>A function is a block of code that is made by user. Each function can be created by typing :</p>
    <p><code>function FunctionName()<br>{<br>Block of code<br>}</code></p>
    <p>Each function can be added with parameters and when calling the function, it needs the parameters to run.</p>
    <p>Example :</p>
    <img src="/assets/images/js_function-1.svg" alt="" class="w-100">
    <p class="mt-3">In the code above, there are three functions which are:</p>
    <li class="mb-1">A function <code>myFunction</code> without any parameter which will run the block of code as soon as it is called.</li>
    <li class="mb-1">A function <code>sum</code> with parameters which adds both of the parameters value and <code>console.log()</code> it. In a parameter function, you don't need to assign the data type as it can adjust the data type according to the input.</li>
    <li class="mb-1">A recursive function which will call itself again. In the example we are going to use Fibonacci. Fibonacci is a sequence where a number is the addition of the 2 previous numbers. In the code we want to do a <code>fibonacci</code> 6 times. With the starting value of 0 and 1 and the starting index is from 0, the sequence is going to be : 0 1 1 2 3 5 8.</li>
    <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Function in JavaScript</h1>
@elseif ($mat === 'method')
    <h1 class="c_content_title1">Method</h1>
    <p class="lead">Method are property that is built in some of the data type which helps getting or changing the values into different forms.</p>

    <p>Some examples include String methods, Number methods, and Array methods. Each of these has a lot of methods that we cannot show everything and just going to test some of them.</p>
    <p>Example :</p>
    <img src="/assets/images/js_method-1.svg" alt="" class="w-100">
    <p class="mt-3">In the code above, we are creating a <code>string</code>, an <code>int</code>, and an <code>array</code> variable. For the <code>string</code> variable, we can use <code>.length</code> to get the size of the <code>string</code> and also changing all the characters into Uppercase (capital letter) by using <code>.toUpperCase()</code>.</p>
    <p>For the number, we are changing it into a string by using <code>.toString()</code> and combining it with character 'A'. </p>
    <p>For the array, we are making it <code>const</code> and finding out the length of the array using <code>.length</code>.</p>

    <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Method in JavaScript</h1>
@elseif ($mat === 'class')
    <h1 class="c_content_title1">Class and Object</h1>
    <p class="lead">We need class to define a group of variable that can form an object</p>

    <p>Class are a structure which contains attribute that used for creating an object. Object can be defined like a car which have attributes that is from a class. You don't need a class to create an object as you can just state the attribute inside the variable.</p>
    <p>Example :</p>
    <img src="/assets/images/js_class-1.svg" alt="" class="w-100">
    <p class="mt-3">But if you need a class, we can create a class with a syntax of :</p>
    <p><code>class ClassName { <br>constructor() {Block of code} <br>}</code></p>
    <p>Constructor is needed so when creating a new object, you can input the attribute it needed to the <code>constructor()</code> and it will pass it to the attribute.</p>
    <p>Example :</p>
    <img src="/assets/images/js_class-2.svg" alt="" class="w-100">
    <p class="mt-3">In any other Programming language with Classes and objects, you can also apply inheritance to the classes so the child class will inherit the parent class like the example below. We use the <code>super()</code> method in the child class to call the parent constructor and access their attributes.</p>
    <p>Example :</p>
    <img src="/assets/images/js_class-3.svg" alt="" class="w-100">
    
    <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Class and Object in JavaScript</h1>
@endif