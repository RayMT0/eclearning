{{-- C++ Contents --}}

@if($mat === 'overview')
    <h1 class="c_content_title1">C++ Overview</h1>
    <p class="lead">C++ is a programming language that is an extension of C programming language with the same syntax. The difference between C++ and C is that C++ is more used than C and also supports Object-Oriented Programming (OOP) which are classes and objects while C doesn't.</p>
    <h1 class="fs-4 mt-5 mb-3">Course Outline</h1>
    <div class="row g-4">
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/setup" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Setup</strong>
                <span class="text-secondary">Learn how to setup C++</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/io-types" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">I/O & Data Types</strong>
                <span class="text-secondary">Learn how to create I/O and variables</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/operators" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Operators</strong>
                <span class="text-secondary">Learn how to utilize operator functions in C++</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/condition" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Conditions</strong>
                <span class="text-secondary">Learn how to use condition statements</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/loop" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Looping</strong>
                <span class="text-secondary">Learn how to create loops in C++</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/break-continue" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Break/Continue</strong>
                <span class="text-secondary">Learn how to use break and continue</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/array" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Array</strong>
                <span class="text-secondary">Learn how to create and utilize array</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/struct" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Struct</strong>
                <span class="text-secondary">Learn how to create and edit a struct</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/pointers" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Pointers</strong>
                <span class="text-secondary">Learn how and when to utilize pointers</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/function" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Function</strong>
                <span class="text-secondary">Learn how to create and use functions in C++</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/oop" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">OOP</strong>
                <span class="text-secondary">Learn how to apply OOP in C++</span>
            </a>
        </div>
    </div>
    @elseif ($mat === 'setup')
        <h1 class="c_content_title1">C++ Setup</h1>
        <p class="lead">Before starting, the course will offer pictures of the code + output to help understand it better. For the application to run C++, there is a lot of option like Visual Studio which is very popular but in this course, we'll use Dev C++ (Version 5.11).</p>

        <h1 class="fs-4 mt-5 mb-3">Dev C++ Setup</h1>
        <p>After downloading the app, we can try to create a new file by clicking File -> New -> Source File or use a shortcut (ctrl + n). Creating a new file will show a blank notepad where we can write our C++ code. Then we can write the code similar to the picture below.</p>
        <img src="/assets/images/cpp_ss-1.svg" alt="cpp" class="w-100">
        <p class="mt-3">Let breakdown each line of the code :</p>
        <p class="mb-1">Line 1 : This line is the library that is needed to run a C++ code as it contains the input and output that is crucial in a programming language.</p>
        <p class="mb-1">Line 2, 4, 5 : These lines are just space to make it more readable and not clustered.</p>
        <p class="">Line 3 : To run the code after calling the library is a function (more on it later) called '<code>int main() { }</code>'. This is the function that is needed on every code to compile and run while also putting a "return 0;” as a way to end the function thus stopping the code. The "<code>return 0</code>" is given a semicolon (;) after because every C++ statement must end with it.</p>
        <img src="/assets/images/cpp_ss-2.svg" alt="" class="w-100">
        <p class="mt-3">In the picture, Dev C++ create a .exe of the file to run the code and it return value 0 which means there are no errors from starting up the code and running it.</p>
        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just created a C++ setup</h1>
    @elseif ($mat === 'io-types')
        <h1 class="c_content_title1">I/O, Variable, and Data Types</h1>
        <p class="lead">To start producing something through C++ we first have to know about I/O, Variable, and Data Types in C++.</p>

        <h1 class="fs-4 mt-5 mb-3">Input & Output</h1>
        <p>Input and Output are always present in any programming language with the purpose so that user can try to insert their own attempt while also returning the input back to the user. To setup Input and Output, with input we use "<code>cin</code>” (read as c-in) and output we use "<code>cout</code>” (c-out). The format of using Input and Output are :</p>
        <p>Input : <code>cin >> "variablename”</code>.</p>
        <p>Output : <code>cout << "variablename”</code> or <code>cout << "Test”</code> for printing text.</p>

        <h1 class="fs-4 mt-5 mb-3">Variable & Data Types</h1>
        <p class="mb-1">In an input, we need somewhere inside the code to hold the value that we already input (cin) that is called a Variable. Each Variable must be defined with each Data Types available in C++ which are :</p>
        <li class="mb-1"><code>int</code> - which stands for integer that stores whole numbers without any decimals.<br>Example : 1, 2, 3.
        </li>
        <li class="mb-1"><code>float</code> or <code>double</code> - which stores decimals number.<br>Example : 1.92, 2.00, 3.35.
        </li>
        <li class="mb-1"><code>char</code> - which stores a single character and must be surrounded by single quotes.<br>Example : 'A', 'B'
        </li>
        <li class="mb-1"><code>string</code> - which stores multiple character in a form of text and must be surrounded by multiple quotes.<br>Example : "Hello World".
        </li>
        <li class="mb-1"><code>bool</code> - which store 2 values consist of <code>true</code> or <code>false</code>.
        </li>

        <p class="mt-4 mb-1">When typing the code input, the format of the variable will be :</p>
        <p>"DataType VariableName = value;” or <code>int varName = 1;</code></p>

        <p>Example :</p>
        <img src="/assets/images/cpp_io-1.svg" alt="" class="w-100">
        <p class="mt-3">In the picture above, we initialize all variables with value except int. We are inputting the variable of "num” using "<code>cin >></code>” to get the value for the variable. Then we are going to output the input variable and all the other variables using "<code>cout <<</code>”. To input or output multiple variables in one line can be added with "<code>>></code>” or "<code><<</code>” according to input or output.</p>
        <p>From the output we can see that it printed every variable (Boolean variable is printed as 0 (false) or 1 (true)) according to the value we already set for all of it. We also added "<code>/n</code>” in the output as it means that the code will enter from the original line to a new line so that it is more readable.</p>
        <p>Also, a little bit of tip, if you write a data type the color of the word will not be white (except string) to determine if you write it correctly or not. Another one is that you can comment code so that it will not run the commented code by typing "<code>//</code>” in the front of the code or you can do the shortcut (ctrl + /).</p>
        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned I/O & Data types in C++</h1>
    @elseif($mat === 'operators')
        <h1 class="c_content_title1">Operators</h1>
        <p class="lead">We already setup a value in a variable but the value can be changed by initializing a new value or using operators. </p>
        <p>There are a lot of operators available :</p>
        <li>Arithmetic</li>
        <li>Assignment</li>
        <li>Comparison</li>
        <li>Logical</li>

        <p class="fs-4 mt-5 mb-3">Arithmetic Operators</p>
        <p>Arithmetic operators consists of :</p>
        <li class="mb-1">Addition (+) <i class="bi bi-arrow-right-short"></i> Adds 2 values together : <code>x + y</code></li>
        <li class="mb-1">Subtraction (-) <i class="bi bi-arrow-right-short"></i> Subtracts one values to another : <code>x - y</code></li>
        <li class="mb-1">Multiplication (*) <i class="bi bi-arrow-right-short"></i> Multiplies 2 values together : <code>x * y</code></li>
        <li class="mb-1">Division (/) <i class="bi bi-arrow-right-short"></i> Divides one value to another and return the value of the division : <code>x / y</code></li>
        <li class="mb-1">Module (%) <i class="bi bi-arrow-right-short"></i> Divides one value to another and return the remainder value of the division : <code>x % y</code></li>
        <li class="mb-1">Increment (++) <i class="bi bi-arrow-right-short"></i> Increase the value of a variable by 1 : <code>x++</code></li>
        <li class="mb-1">Decrement (--) <i class="bi bi-arrow-right-short"></i> Decrease the value of a variable by 1 : <code>x--</code></li>

        <p class="mt-2">Example :</p>
        <img src="/assets/images/cpp_op-1.svg" alt="" class="w-100">
        <p class="mt-3">In the picture above, we are declaring 2 variables with value and then adding them together. We can add them when we print the value or putting it in a new variable then print the value. The first value is 15 and the second value is 16 because we increment the value after the addition.</p>

        <p class="fs-4 mt-5 mb-3">Assignment Operators</p>
        <p>Assignment operators work almost the same way as Arithmetic Operators. The only difference is the format :</p>
        <li class="mb-1">Arithmetic addition <i class="bi bi-arrow-right-short"></i> <code>x + y</code></li>
        <li class="mb-1">Assignment addition <i class="bi bi-arrow-right-short"></i> <code>x += y</code></li>
        <p class="mt-2 mb-2"><code>x += y</code> can be interpreted as <code>x = x + y</code> where it adds the value y with value of the previous x to make a new x. Below is the rest of assignment operators :</p>
        <li class="mb-1">Subtraction <i class="bi bi-arrow-right-short"></i> <code>x -= y</code></li>
        <li class="mb-1">Multiplication <i class="bi bi-arrow-right-short"></i> <code>x *= y</code></li>
        <li class="mb-1">Division <i class="bi bi-arrow-right-short"></i> <code>x /= y</code></li>
        <li class="mb-1">Module <i class="bi bi-arrow-right-short"></i> <code>x %= y</code></li>

        <p class="mt-2">Example :</p>
        <img src="/assets/images/cpp_op-2.svg" alt="" class="w-100">
        <p class="mt-3">This picture shows that the original value of <code>num</code> is 10 but after doing assignment operation, the new value is 15 because it add himself and <code>num2</code> which is 5.</p>

        <p class="fs-4 mt-5 mb-3">Comparison Operators</p>
        <p>Comparison Operators are used to compare 2 values. This is the operators that are used a lot as the guide to the end path of a code. The return value of a comparison can be 0 (false) or 1 (true). Below are the type of comparison :</p>
        <li class="mb-1">Equal to <i class="bi bi-arrow-right-short"></i> <code>==</code></li>
        <li class="mb-1">Not equal <i class="bi bi-arrow-right-short"></i> <code>!=</code></li>
        <li class="mb-1">Greater than <i class="bi bi-arrow-right-short"></i> <code>></code></li>
        <li class="mb-1">Less than <i class="bi bi-arrow-right-short"></i> <code><</code></li>
        <li class="mb-1">Greater than or equal to <i class="bi bi-arrow-right-short"></i> <code>>=</code></li>
        <li class="mb-1">Less than or equal to <i class="bi bi-arrow-right-short"></i> <code><=</code></li>
        <p class="mt-2">Example :</p>
        <img src="/assets/images/cpp_op-3.svg" alt="" class="w-100">
        <p class="mt-3">In the first <code>cout <<</code>, we compare if the value of <code>num</code> is less than or equal to <code>num2</code> and it returns the value of 0 because it is <code>false</code>. The second one we compare if the value of <code>num</code> is 10 and it returns 1 which is <code>true</code>. The final one we compare the value of <code>num</code> is greater than <code>num2</code> and it returns <code>true</code>.</p>

        <p class="fs-4 mt-5 mb-3">Logical Operators</p>
        <p>Logical Operators are usually used to check two statements that contains comparison operators if it is true or not. There are 3 types of logic :</p>
        <li class="mb-1">And (<code>&&</code>) <i class="bi bi-arrow-right-short"></i> which returns <code>true</code> if both statements are true.</li>
        <li class="mb-1">Or (<code>||</code>) <i class="bi bi-arrow-right-short"></i> which returns <code>true</code> if one of the statements is true.</li>
        <li class="mb-1">Not (<code>!</code>) <i class="bi bi-arrow-right-short"></i> which reverse the result of the logic by returning <code>false</code> if the result is <code>true</code>.</li>
        <p class="mt-2">Example :</p>
        <img src="/assets/images/cpp_op-4.svg" alt="" class="w-100">
        <p class="mt-3">Using the example from before and modifying it, we can see the first result is <code>true</code> because both of the statement are true. The second result is also true because OR (<code>||</code>) only need one of the statement to be true so it returns <code>true</code>. The final result is false because we reverse the Boolean with NOT (<code>!</code>) which then return <code>false</code>.</p>

        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Operators in C++</h1>
    @elseif($mat === 'condition')
        <h1 class="c_content_title1">Conditions</h1>
        <p class="lead">In a program, we mostly utilize choices to run something. We use conditions to code choices and results inside a program.</p>

        <p class="mt-4">Conditions are used to validate the 2 values between 2 variables using logical and comparison operators. It is commonly used to make the logic of the code when it runs. There are 4 statement in conditions :</p>
        <li class="mb-1">"<code>if</code>" is the start of the condition statement where it will run it's line of code if the condition is true.</li>
        <li class="mb-1">"<code>else</code>" is the final of the condition statement where it will run it's line of code if it is the final statement because the condition is false.</li>
        <li class="mb-1">"<code>else if</code>" is a new condition statement between "if” and "else” to validate after the first condition is false.</li>
        <li class="mb-1">"<code>switch</code>" ” is a statement that contains cases. These cases can be assigned values where the line of code will be run if it is true. Each of the cases must also be assigned <code>break</code> (will be explained in <a href="/course/cpp/break-continue" class="text-primary">Break/Continue</a> ) because if not, the code is going to read all the cases from the start of the assigned <code>case</code> to the bottom of the switch.</li>
        <p class="mt-3 mb-1">The syntax format of condition is :</p>
        <p><code>if (condition) {<br>"Line of code here"<br>}</code></p>

        <p>Example :</p>
        <img src="/assets/images/cpp_con-1.svg" alt="" class="w-100">
        <p class="mt-3">In this picture we are testing the conditions. On the first <code>if</code>, it returns true because the condition is met so it prints the inside code of <code>if</code>. On the second <code>if</code>, it does not run the inside code because the condition is not met. Instead it runs the condition after it which is the <code>else if</code> and it runs the inside code because it is true.</p>
        <p>After the <code>if</code> conditions are done, we input a new value into variable <code>num</code> which is 2. Then the <code>switch</code> runs using the value of variable <code>num</code> and it runs <code>case 2</code> because the value of the case is the same as the variable and it runs the inside code. It prints the output and also stop the switch condition so that it does not run the code below which is <code>default</code>.</p>

        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Conditions in C++</h1>
    @elseif($mat === 'loop')
        <h1 class="c_content_title1">Looping</h1>
        <p class="lead">To run a code multiple times or determined times inside a program we must first learn about looping functions.</p>

        <p>There are two general use of loop function which are :</p>
        <li class="mb-1">While loop</li>
        <li class="mb-1">For loop</li>

        <p class="fs-4 mt-5 mb-3">While Loop</p>
        <p>"While looping” works almost the same as conditions except it will keep running the statement if the condition is met. "While looping” also has another form which is do/while looping where it will do the line of code first and then check the condition to see if it can run the line of code inside the "do” again.</p>
        <p class="mb-1">While loop syntax format :</p>
        <p><code>while (condition) {<br>"Line of code here"<br>}</code></p>
        <p>Example :</p>
        <img src="/assets/images/cpp_loop-1.svg" alt="" class="w-100">
        <p class="mt-3">In the picture above, both loop will run and stop when the value of num reach 5. Even though both of the loop stop at the same number, they run differently. While loop checks if the condition is met and run the line of code. Do While loop run the line of code first and then check the condition if it is still eligible to run the do while again.</p>

        <p class="fs-4 mt-5 mb-3">For Loop</p>
        <p class="mb-1">"For Looping” is another type of looping where its syntax are :</p>
        <p class="mb-3"><code>for (statement 1; statement 2; statement 3) {<br>"Line of code here"<br>}</code></p>
        <li class="mb-1">Statement 1 is the variable declared with the value.</li>
        <li class="mb-1">Statement 2 is the condition for the looping to run.</li>
        <li class="mb-1">Statement 3 is ran every time the line of code is already ran.</li>
        <p class="mt-3">Example :</p>
        <img src="/assets/images/cpp_loop-2.svg" alt="" class="w-100">
        <p class="mt-3">This code runs for 10 times because we give the starting value of <code>i</code> as 0 and increment the value <code>i</code> by 1 with <code>i++</code> every time it finishes running the line of code inside the loop.</p>

        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Looping in C++</h1>
    @elseif($mat === 'break-continue')
        <h1 class="c_content_title1">Break/Continue</h1>
        <p class="lead">Break or Continue can be used inside a loop for either stopping the looping fully or just once.</p>

        <p>Below are the example of using break or continue :</p>
        <img src="/assets/images/cpp_break-1.svg" alt="" class="w-100">
        <p class="mt-3">In this code, if the value of <code>i</code> reaches 5, it will break once which comes from <code>continue</code> that skipped one iteration of <code>i</code> and doesn't print its value. The next condition is if the value of <code>i</code> reaches 7, it will break the loop fully and doesn't loop more than 7 iterations.</p>

        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Break and Continue in C++</h1>
    @elseif ($mat === 'array')
        <h1 class="c_content_title1">Array</h1>
        <p class="lead">Array is a collection of multiple value inside of a single variable.</p>

        <p class="mb-1">An array is defined by :</p>
        <p><code>DataType VariableName[index]</code></p>
        <p>Index is the value size of the variable. Example if we put index = 4, then this variable can hold up to 4 values</p>
        <p>Example :</p>
        <img src="/assets/images/cpp_arr-1.svg" alt="" class="w-100">
        <p class="mt-3">In the code, we initialize 3 values and we are going to input the final value. We are going to assign the <code>num</code> value into index 3 because an array read index starting from 0, so index 3 is actually the fourth number which is currently empty. After putting the value into the array, we'll print each of the index value by using <code>for</code> loop.</p>

        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Array in C++</h1>
    @elseif ($mat === 'struct')
        <h1 class="c_content_title1">Struct</h1>
        <p class="lead">Struct is a way to put multiple variables into one place calling it a structure variable. </p>

        <p>To make a struct, it must be defined outside the <code>int main()</code></p>
        <p>Let’s look at the code below :</p>
        <img src="/assets/images/cpp_struct-1.svg" alt="" class="w-100">
        <p class="mt-3">First we are going to declare the <code>struct</code> with the variable name of “person”. Inside the struct, it's going to have an age, a name, and an id. Then we are going to initialize all the value of each variables inside the struct by calling the struct name + '.' + inside struct variable name. <br><i class="bi bi-arrow-right-short"></i> <code>struct.variable = value</code> <br>After that we can print all the values of the variable.</p>

        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Struct in C++</h1>
    @elseif ($mat === 'pointers')
        <h1 class="c_content_title1">Pointers</h1>
        <p class="lead">Pointers let us points the memory address of a variable which we can call in a program.</p>

        <p>When we have a variable with a value, we can use a '&' operator on the variable to get the memory address of the variable. This address can be used by a pointer which only stores memory address as its value.</p>
        <p>Example :</p>
        <img src="/assets/images/cpp_pointer-1.svg" alt="" class="w-100">
        <p class="mt-3">In this code we assign a string variable <code>string value</code> with a value of “test” and then create a pointer variable <code>string* ptr</code> to get the memory address of <code>string value</code>. If we print the value using the '&' operator, we get the memory address. Same with the ptr because pointer store memory address but if we put '*' in front of the pointer, it will print the value of the variable which is “test”. This method with '*' is called dereferencing.</p>
        <p>Another Example :</p>
        <img src="/assets/images/cpp_pointer-2.svg" alt="" class="w-100">
        <p class="mt-3">We can also modify the pointer to change the value and also the original variable value.</p>

        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Pointers in C++</h1>
    @elseif ($mat === 'function')
        <h1 class="c_content_title1">Function</h1>
        <p class="lead">In order to create a predetermined group of code that can execute something inside a program we need to create something called function</p>

        <p>A function is a block of code that can be made by user and can only run when it is called into <code>int main()</code>. Each function must also have a data type to be able to run. You can put parameters inside the function or no parameters. If parameters are placed, if the function was called, it must fulfill the parameters inside the function to be able to run.</p>
        <p>Example :</p>
        <img src="/assets/images/cpp_function-1.svg" alt="" class="w-100">
        <p class="mt-3">In the code above, there are two functions which are <code>void</code> function and <code>int</code> function. Void function does not need to return any value but other data type such as <code>int, float, double, string, char, bool</code> must. We start by declaring variable and value of x and y. Then we declare variable z and get the value from using the sum function and printing the value of z.</p>
        <p>Another example :</p>
        <img src="/assets/images/cpp_function-2.svg" alt="" class="w-100">
        <p class="mt-3">There is another type of function called recursive where it return by calling itself again. The easiest way to explain is by making a Fibonacci function. Fibonacci is a sequence where a number is the addition of the 2 previous numbers.</p>
        <p>In the code we want to do a Fibonacci 6 times. With the starting value of 0 and 1 and the starting index is from 0, the sequence is going to be : 0 1 1 2 3 5 8. So the program will return the result 8 which is the value of the sixth Fibonacci number.</p>

        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Function in C++</h1>
    @elseif ($mat === 'oop')
        <h1 class="c_content_title1">Object Oriented Programming (OOP)</h1>
        <p class="lead">OOP is used to make our program contain object based classes which can be called later one by one inside our main class that will be executed.</p>
        
        <p>In Object Oriented Programming, we are defining classes and objects. Classes and objects can be defined as a sphere with the inside containing air. The sphere is the object while the air is the attribute of the class inside. In classes, you must declare the class and inside it must have a specifier and then the attributes.</p>
        <p>Example :</p>
        <img src="/assets/images/cpp_oop-1.svg" alt="" class="w-100">
        <p class="mt-3">In this code, we created a class person with a public age and name. Specifier must be :</p>
        <li class="mb-1">Public <i class="bi bi-arrow-right-short"></i> Can be accessed anywhere outside of the class.</li>
        <li class="mb-1">Private <i class="bi bi-arrow-right-short"></i> Cannot be accessed outside of the class.</li>
        <li class="mb-1">Protected <i class="bi bi-arrow-right-short"></i> Cannot be accessed outside of the class, unless they are inherited classes (inheritance will be explained further below).</li>
        <p>Then in the main we create a new object using the attribute from the class person.</p>
        <p>In a class, we can also create a method that works like a function that can be called by the object when it is created.</p>
        <p>Example :</p>
        <img src="/assets/images/cpp_oop-2.svg" alt="" class="w-100">
        <p class="mt-3">Another way to create objects is by making a constructer with parameters consisting the attributes inside the class.</p>
        <p>Example :</p>
        <img src="/assets/images/cpp_oop-3.svg" alt="" class="w-100">
        <p class="mt-3">In C++ OOP, there are 3 types of OOP :</p>
        <li class="mb-1">Encapsulation <i class="bi bi-arrow-right-short"></i> A type where the class attributes are private and the only way to access it is by using a public get and set method.</li>
        <li class="mb-1">Inheritance <i class="bi bi-arrow-right-short"></i> A type where a class (parent) passing down its attribute to another class (child).</li>
        <li class="mb-1">Polymorphism <i class="bi bi-arrow-right-short"></i> A type where a single class can be used for different type of class (many forms).</li>

        <p class="fs-4 mt-5 mb-3">Encapsulation</p>
        <img src="/assets/images/cpp_oop-4.svg" alt="" class="w-100">
        <p class="mt-3">This code above is the example of encapsulation where we create an object and set the attribute using the set method and get the attribute value using the get method.</p>

        <p class="fs-4 mt-5 mb-3">Inheritance</p>
        <img src="/assets/images/cpp_oop-5.svg" alt="" class="w-100">
        <p class="mt-3">This is a simple example of inheritance where the class Child get the attribute string type from the class Parent. To assign an inheritance, the child class must add “: public (parentClass)” beside the child class name.</p>
        
        <p class="fs-4 mt-5 mb-3">Polymorhpismn</p>
        <img src="/assets/images/cpp_oop-6.svg" alt="" class="w-100">
        <p class="mt-3">In this code, polymorphism works similar with inheritance where it inherits from class to another. But polymorphism allows us to perform an action in many different ways. From the example, the parent class has a method and the child class inheriting the parent class also has a method. When we create an object for each class and run the method, we can see that the child method does not use the parent class rather it uses its own method.</p>

        <h1 class="fs-4 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learned Object Oriented Programming in C++</h1>
@endif