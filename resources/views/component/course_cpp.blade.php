{{-- C++ Contents --}}

@if($mat === 'overview')
    <h1 class="c_content_title1">C++ Overview</h1>
    <p class="lead">C++ is a programming language that is an extension of C programming language with the same syntax. The difference between C++ and C is that C++ is more used than C and also supports Object-Oriented Programming (OOP) which are classes and objects while C doesn’t.</p>
    <h1 class="fs-5 mt-5 mb-3">Course Outline</h1>
    <div class="row g-3">
        <div class="col-xl-3 col-md-6">
            <a href="/course/cpp/setup-syntax" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Setup & Syntax</strong>
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
            <a href="" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Conditions & Switch</strong>
                <span class="text-secondary">Learn how to use condition statements</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Looping</strong>
                <span class="text-secondary">Learn how to create loops in C++</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Break/Continue</strong>
                <span class="text-secondary">Learn how to use break and continue</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Arrays</strong>
                <span class="text-secondary">Learn how to create and utilize arrays</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Struct</strong>
                <span class="text-secondary">Learn how to create and edit a struct</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Pointers</strong>
                <span class="text-secondary">Learn how and when to utilize pointers</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">Function</strong>
                <span class="text-secondary">Learn how to create and use functions in C++</span>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a href="" class="d-block text-decoration-none">
                <strong class="d-block h5 mb-0">OOP</strong>
                <span class="text-secondary">Learn how to apply OOP in C++</span>
            </a>
        </div>
    </div>
    @elseif ($mat === 'setup-syntax')
        <h1 class="c_content_title1">C++ Setup & Syntax</h1>
        <p class="lead">Before starting, the course will offer pictures of the code + output to help understand it better. For the application to run C++, there is a lot of option like Visual Studio which is very popular but in this course, we’ll use Dev C++ (Version 5.11).</p>

        <h1 class="fs-5 mt-5 mb-3">Dev C++ Setup</h1>
        <p>After downloading the app, we can try to create a new file by clicking File -> New -> Source File or use a shortcut (ctrl + n). Creating a new file will show a blank notepad where we can write our C++ code. Then we can write the code similar to the picture below.</p>
        <img src="/assets/images/cpp_ss-1.svg" alt="cpp" class="w-100">
        <p class="mt-3">Let breakdown each line of the code :</p>
        <p class="mb-1">Line 1 : This line is the library that is needed to run a C++ code as it contains the input and output that is crucial in a programming language.</p>
        <p class="mb-1">Line 2, 4, 5 : These lines are just space to make it more readable and not clustered.</p>
        <p class="">Line 3 : To run the code after calling the library is a function (more on it later) called '<code>int main() { }</code>'. This is the function that is needed on every code to compile and run while also putting a “return 0;” as a way to end the function thus stopping the code. The "<code>return 0</code>" is given a semicolon (;) after because every C++ statement must end with it.</p>
        <img src="/assets/images/cpp_ss-2.svg" alt="" class="w-100">
        <p class="mt-3">In the picture, Dev C++ create a .exe of the file to run the code and it return value 0 which means there are no errors from starting up the code and running it.</p>
        <h1 class="fs-5 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just created a C++ setup</h1>
    @elseif ($mat === 'io-types')
        <h1 class="c_content_title1">I/O, Variable, and Data Types</h1>
        <p class="lead">To start producing something through C++ we first have to know about I/O, Variable, and Data Types in C++.</p>

        <h1 class="fs-5 mt-5 mb-3">Input & Output</h1>
        <p>Input and Output are always present in any programming language with the purpose so that user can try to insert their own attempt while also returning the input back to the user. To setup Input and Output, with input we use “<code>cin</code>” (read as c-in) and output we use “<code>cout</code>” (c-out). The format of using Input and Output are :</p>
        <p>Input : <code>cin >> “variablename”</code>.</p>
        <p>Output : <code>cout << “variablename”</code> or <code>cout << “Test”</code> for printing text.</p>

        <h1 class="fs-5 mt-5 mb-3">Variable & Data Types</h1>
        <p class="mb-1">In an input, we need somewhere inside the code to hold the value that we already input (cin) that is called a Variable. Each Variable must be defined with each Data Types available in C++ which are :</p>
        <li class="mb-1"><code>int</code> - which stands for integer that stores whole numbers without any decimals.<br>Example : 1, 2, 3.
        </li>
        <li class="mb-1"><code>float</code> or <code>double</code> - which stores decimals number.<br>Example : 1.92, 2.00, 3.35.
        </li>
        <li class="mb-1"><code>char</code> - which stores a single character and must be surrounded by single quotes.<br>Example : ‘A’, ‘B’
        </li>
        <li class="mb-1"><code>string</code> - which stores multiple character in a form of text and must be surrounded by multiple quotes.<br>Example : “Hello World”.
        </li>
        <li class="mb-1"><code>bool</code> - which store 2 values consist of <code>true</code> or <code>false</code>.
        </li>

        <p class="mt-4 mb-1">When typing the code input, the format of the variable will be :</p>
        <p>“DataType VariableName = value;” or <code>int varName = 1;</code></p>

        <p>Example :</p>
        <img src="/assets/images/cpp_io-1.svg" alt="" class="w-100">
        <p class="mt-3">In the picture above, we initialize all variables with value except int. We are inputting the variable of “num” using “<code>cin >></code>” to get the value for the variable. Then we are going to output the input variable and all the other variables using “<code>cout <<</code>”. To input or output multiple variables in one line can be added with “<code>>></code>” or “<code><<</code>” according to input or output.</p>
        <p>From the output we can see that it printed every variable (Boolean variable is printed as 0 (false) or 1 (true)) according to the value we already set for all of it. We also added “<code>/n</code>” in the output as it means that the code will enter from the original line to a new line so that it is more readable.</p>
        <p>Also, a little bit of tip, if you write a data type the color of the word will not be white (except string) to determine if you write it correctly or not. Another one is that you can comment code so that it will not run the commented code by typing “<code>//</code>” in the front of the code or you can do the shortcut (ctrl + /).</p>
        <h1 class="fs-5 mt-5 mb-3"><i class="bi bi-trophy-fill me-3"></i>Congratulations you just learnt I/O & Data types in C++</h1>
    @elseif($mat === 'operators')
        <h1 class="c_content_title1">Operators</h1>
        <p class="lead">To start producing something through C++ we first have to know about I/O, Variable, and Data Types in C++.</p>
@endif