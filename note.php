
						Window
						--------

=> Window is the  primary object javascript providing some property and method.\
 alert()
 confirm()
 prompt()
 location
 setInteraval()
 clrarinterval()
 setTimeout()
 ect.
 
 
 window.alert()
 
 
 prompt()
 --------
		=> prompt() is used to take input on runtime.
		=> return type of prompt is string.
		=> prompt () is location in window object.
		
	santax
		var a=prompt("FieldName","placeholder")
		
		
  var
  ----
	var variables are globally scoped.
	
	var variable can be updated and re-declared.
	
	
	
	
	

	
  let
  ----
	let variable can be updated but not re-declared.
	
  const
  -----
    const variables neither be updated not re-declared.
	
	
== VS ===
--------------
	==Equality operator
	
       => Here value is important but not type.
	   
	   
	   
	===Strict Equality Operator
	
	   =>Here both value and type is important
	   
	   10=="10" true
	   10==="10"false
	   
Type Casting || Type conversion
-------------------------------------

	=> the process of converting one type value to another type is known as type casting or type conversion.
	
	1. paeseInt()
	2. parseFloat()
	
window
======

		=> Location property is used to redirect location one page to another page.
		
	syntax:
			window.location="path"
			
		confirm()
		---------
			=> confirm box is used to take confirmation with user. it has two buttons. (ok and cancel)
			
			=> if user click on ok button the it returns true and if user click cancel button it returns false
			syntax
			
			window.confirm()
			
		open()
		-----
			=> open() is used to open a website on new tab or new window
			
			syntax:
			
				window.open("URL","_blank","height=value,width=value")
				
			EX:
			
				window.open("instagram.com","_blank","height=300px,width=400px")
				
		getElementById()
		----------------
			=> getElementByIdfunction is used select HTML element on the basis of Id.
			=> return type of getElementById function is current object 
			=> getElementById function is location in document object.
			=> document is the built-in object of DOM providing some property and methods to handle html tags
			
			syntax:
				document.getElementById("Id Of html element")
			EX:
				document.getElementById("dv")
				
				
		Function in JavaScript
		----------------------
		=> function is a group of reusable code desgined to perform particular task repeadedly
		=> A javaScript function is executed when calls it.
	
		There are two type of function in javaScript
		--------------------------------------------
		1. Built-in Function
			=>The function which are coming along wich system interpreter are known as built-in function
			
			 EX:
				alert()
				prompt()
				open()
				setInterval()
				etc.
		2. The function which are developed by user acoding to business login are known as UDF.
			
			there are two type keyword presents to define UDF
			------------------------------------------------
				1.function(mandatory)
				2.return(optional)
				
				
				
				case1.
				-----
				
				function without parameter
				--------------------------
					syntax:
					--------
							
							syntax:
								
								function functionName()
								{
									line-1
									line-2
									line-3
									.....
									line-n
								}
				
		Value
		------
			=> value property is used to get/set the value of selected from control
				
				syntax:
					get:  
						documant.getElementById("txt").value
						
						
					set
						documant.getElementById("Id of HTML Element").value="tex"
						or
						var x=documant.getElementById("txt")
						x.value="jdkasfasn jchak"
				
				
		innerText
		---------
			=> innerText property is used to set/get normal text without extra spacing of selected html tag.
					
				syntax:
				
					get:-
						
						document.getElementById("dv").innerText
						or
						var d=document.getElementById("dv")
						d.innerText
						
					set:-
						
						documant.getElementById("dv").innerText="TECHPILE"
						or
						var a=documant.getElementById("dv")
						a.innerText="TECHPILE"
						
			InnerHTML
			-----------
				=> InnerHTML property is used to set/get content tag and extra space of selected HTML element.
					
					set
						syntax:
							
							document.getElementById("dv").innerHTML="<b> TECHPILE       Technology</b>"
						
								OUTPUR
									TECHPILE        Technology with bolt
					get
						syntax:
							
							<div id="dv"><h1>javaScript</h1></div>
							var a=document.getElementById("dv").innerHTML
							
								OUTPUR
									a=<h1>JavaScript,     HTML & CSS</h1>
									
			textContent:
			
				=>textContant property is used to set/get normal text with extra space of selected HTML element.
						
					syntax:
						set
						----
							<div id="dv">JAVA Script, HTML & CSS</div>
							   document.getElementById("dv").textContant="TECHPILE           TECHNOLOGY"
						
									utoput
										TECHPILE       TECHNOLOGY
						
						get
						----
							<div id="dv">JAVA Script,    HTML &  CSS</div>
							   var a=document.getElementById("dv").textContant
							   
									output+
										JAVA Script,   HTML & CSS
									
						
						
			setInterval
				=> setIntarval function is used to execute a group of statment fo every]given time period
				=> it is location in window object
				=> it has two parameter (callback function,time period)
					
					syntax:
						window.setIntarval("functionName()",1000)
						or
						window.setIntarval(functionName,1000)
					EX:
						window.setIntarval(demo,4000)
				
				
			setTimeout
				=> setTimeout function is used to execute once a group of statment after given time period
					
					syntax:
						window.setTimeout(demo,1000)
						oe
						window.setTimeout("demo()",1000)
					Ex:
					
			clearInterval()
				=> clearInterval function is used to stop functionality of satInterval.
				
				HH : MM : SS
				
	Function with parameter
``````````````````````````````
		parameter
		---------
			=>parameter inputs to the function ,if a function contains parameter, than at the time of calling compulsary we have to provide value to that parameter.
			
				syntax:
				
					function FunctionName(parameter1,parameter2,.....parameterN)
					{
						line 1
						line 2
						.
						.
						.
						line N
					}
				Exa:
					
					function add(a,b)
					{
						print(a+b)
					}
					
					add(10,30)
						
							
					
					output: 40
					
					
	Function with return statment	
	''''''''''''''''''''''''''''''
		=> return statment is used to return output to the caller function after execution of business logic
			
			Exa:
			
				function exp(x,y)
				{
					res=x**y
					return res
				}
				a=exp(3,3)
				alert(a)
				
Date Object
-------------
			=> date is predefine object providing some methods related to current date and time
			
				Syntax:
						=> var obj=new Date()
						
						Date of function
							getDay(0-6)
							getMonth(0-11)
							getFullYear(2021)
							getSecound(0-59)
							getMinutes(0-59)
							getHours(0-59)
							getDate(1-31)
							getMillisecode(0-999)
						
					Ex:
						x.getDay()//29
						x.getMonth()//10
						x.getFullYear()// 2021
							
			
	1/12/2021
chote gya tha 

2/12/2021

			print(0)
			-------
				print function is used to print all document of body dection of page.
					=>it is location in window object
					
					syntax
					
						window.print()
					
					
				Inportent Function 
				-================-
					For Arrey
					
	1=> Concat: Concat function is used to concat two or more array and return new array.
		
		syntax:
				var arr1=[item1,item2,item3]
				var arr2=[item4,item5,item6]
				var arr3=[item7,item8,item9]
				
				arr1.concat(arr2) do ke liye hai------------
				
				arr1concat(arr2,arr3)
				
					output
						=>  
					
	2=> IndexOf : => indexOf fuction is used to return index of first occuence element in given array.
				  => if given element is not presents in array than it.
				  
				  cash:
					
					syntax:
						arr.indexOf
					
					Ex:
						var arr1=["HTML","CSS",".NET"]
						alert(arr.indexOf("js"))//-1
						alert(arr.indexOf("JS"))// 2
						alert(arr.indexOf("HTTML"))// 0
				  
				  cash-2
					arr.indexOf(item,startIndex)
					
					Ex:
						var arr1=["HTML","CSS",".NET"]
						alert(arr.indexOf("HTML",2))//3
										alert(arr.indexOf("CSS",2))//-1
										
	3=> lastIndexOf: => lastIndexOf function is used to retunt index of last occurrence element in given array.
	
					=> 
					
					case-1:
						 arr.lastIndexOf(item)
						
						<script>
                       var arr=["HTML","CSS",".NET","JS","PYTHON","PHP"]
						document.write(arr.lastindexOf("PHP"))//-1
						document.write(arr.lastindexOf("PYTHON"))//4
						document.write(arr.lastindexOf("HTML"))//3
						</script>
			
					case-2:
					
						arr.lastIndexOf(item,starIndex in backward direction)
							<script>
                            var arr=["HTML","CSS",".NET","JS","PYTHON","PHP"]
							alert(arr.lastIndexOf(".NET",4))</script>
						
			
		4=>	reverse(): reverse function is used to reverse element if given array'
				syntax:
					arrName.reverse()
					
				Ex:	
					  var arr=["HTML","CSS",".NET","JS","PYTHON","PHP"]
					  alert(arr)
					  alert(arr.reverse())
			
			
		5=> Sort function: Sort Function is used to sort element of given array.

				syntax:
				<script>
					var arr=["RAM","MOHAN","GOLU",SOUNU]
					var arr1=[30,20,40,20,43,22]
					document.write(arr.sort())
					document.write(arr1.sort())
					
			</script>
			
		6=>slice(): var arr=["RAM","MOHAN","GOLU",SOUNU]
		
			=> slice function is used to return a part of array on the basis of start index and end index 
			=>slice method does not change original array
			=>Negative index 
				syntax:
					arrayName.slice(startIndex,endIndex)// it return element of array from starindex to endIndex-1;
					
				EX-
					var arr=["RAM","MOHAN","GOLU",SOUNU]
					arr.slice(1,3)//MOHAN,GOLU
					arr.slice(2)//GOLU, SOUNU
				
					
		7=>splice funtion: splice function is used to add/remove element of given array,
			=>splice method 
			
				syntax:
					arrayName.splice(startIndex,No of item to delete.item to add)
					
				Ex:
					var arr=["RAM","MOHAN","GOLU","SOUNU"]
					arr.splice(3,1,"DHA")//"RAM","MOHAN","GOLU","DHA"
					arr.splice(0,3,"HTML","PHP")//"HTML","PHP","GOLU","SOUNU"
					
				
		8=>pop(): pop function is used to remove last element of array and return removed element.
			
				syntax;
					ArrayName.pop()//last element
				ex:
				
						var arr=["RAM","MOHAN","GOLU",SOUNU]
						alert(arr.pop())//SOUNU
			
			
		9=>push (): push function is used to add element at the last position of array and return length of updated array
				
				syntax:
					
					arrayName.push(item)
				
				ex:
					var arr=["RAM","MOHAN","GOLU",SOUNU]
						arr.push("GADHI")
					
		10=>includes(): =>includes function is used to check given element present in array or not			
					   =>if given element present in array then it returns true otherwise return false.
					
			case-1:		
				syntax:
					arrayName.includes(item)
				
				ex:
					var arr=["RAM","MOHAN","GOLU","SOUNU"]
					alert(arr.includes("RAM")
			
			
			case-2:
				syntax:
					arrayName.includes(item,startIndex)
			
				ex:
					var arr=["RAM","MOHAN","GOLU","SOUNU"]
					alert(arr.includes("RAM",2)
			
		11=> join function:
			     join function is used to join element of array on the basis of separator.
				
				syntax:
					arratName.join(separator)
				
				Ex:
					var arr=["RAM","MOHAN","GOLU","SOUNU"]
					alert(arr.join("||"))
			---------------------------------------------------------
		
			

	12=>forEach(): forEach method is used to call function for every element present in array.
				syntax:
					arrayName.forEach(currentValue,Index.arrayName)
						(index and arrayName(optional))
						
				ex:
					var arr=["RAM","MOHAN","GOLU","SOUNU"]
					arr.forEach(demo)
					function demo(value)
					{
						alert(value)
					}
			
			
				5/12/2021 KA CHUTA GYA H 
			
		-----------------------------------	
			06/12/2021
			
	=> indexOf function is used to return index of first occurrence charater in ingiven string.
			
			syntax:
				var str="Techpile Technology"
				str.indexOf("t")//-1
				str.indexOf("T")//0
				str.indexOf("T",3)//9
				str.indexOf("0",3)//-1
				
				str.lastIndex("o")//16
				str.lastIndex("T",6)//0
				
	=>slice function is used to return a part of string in given string on the basis of startIndex and endindex.
		=> Negative index is acceptable here
			
				var str="Techpile Technology"
				
				str.slice(3,7)//hpil
				str.slice(9,19)//Technology
				str.slice(9)//Technology
				

	=>subString  
		syntax:
			str subString (startIndex.endIndex)// return part of string from startIndex to endIndex.
				
				var str="Techpile Technology Pvr.Ltd."
				alert(str subString(9,12));//Tec
				alert(str subString(3));//hpile Technology Pvr.Ltd.
				alert(str subString(-3,-2));//error
		 
	=>substr function is used to return a part of string in given string on the basis of startIndex and length
		
		syntax:
			str.substr(startIndex,length)
			
			var str="TECHPILE"
			alert(str.substr(2,4));CHPI
			alert(str.substr(2,5));CHPIL
			
	=>trim():trim function is used to remove both side white space of string
			
			syntax:
				var str="   TECHIPILE  "
				
				alert(str.length)//10
				str=str.trim()
				alert(str.length)//8
				
	=> charAt():charAt function is used to return character at specified index in a given string.
		
		syntax: 
			stringName.charAt(index);
	Ex:
		var str="Techpile"
		alert(str.charAt(5))//i 
		
	=>charCodeAt(): charCodeAt function id used to return unicode value of given cherecter at specified index.
		syntax: 
			stringName.charCodeAt(index);
		ex:	
			var str="ABC"
			alert(str.charCodeAt(2))67
				
				
	=>include(): Include function is used to check whether string present in given sentence or not
	=>It returns true if given string present in sentence otherwise return false
		Case1
			syntax:
				var str="TECHPILE TECHNOLOGY"
				alert(str.include("Tech"))//false
				alert(str.include("TECH"))//true
				
		case-2
			syntax:
	
		alert(str.include("TECH",10))//false
		
	replace():=>replace function is used to replace old string with new string 
			  =>by dufault replace function replaced first matches string.
			  
				case-1
					syntax:
						stringName.replace("oldString","newString")
						var str="techpile technology pvt ltd"
					
					ex;
						<script>
						var str="techpile technology pvt ltd"
						str.replace("tech","TECH");
						alert(str);
						</script>
				case-2	
					Replace to globle
						<script>
						var str="techpile technology pvt ltd"
						alert(str.replace(/tech/g,"TECH"));
						</script>
					
	=>startswith():			
				
				
				
				
	=>toString(): toString function is used to convert other datatype value into string.
		
		
	=>typeof(): typeof function is used to check type of data present in variable.
		
		syntax:
			typeof(variableName)
			
			{
	=>getElementById
	=>getElementsByTagName
	=>getElementsByClassName
	query
			}


	=>getElementsByTagName: getElementsByTagName function is used to return collectionof all element with specified tag
		name as collectionHTMLObject.	
	=> it is located in document object
		syntax:
			var a=documant.getElementsByTagName("tagName")
				
		Exa:
			var a=documant.getElementsByTagName("h1")[0].innerText
			var a1=documant.getElementsByTagName("h1")[1].innerText
			var a2=documant.getElementsByTagName("h1")[2].innerText
			var a3=documant.getElementsByTagName("h1")[3].innerText
			var a4=documant.getElementsByTagName("h1")[4].innerText
			
			<h1>PHP</h1>
			<h1>JAVA</h1>
			<h1>JS</h1>
			<h1>CSS</h1>
			<h1>HTML</h1>
				
	=>getElementsByClassName: getElementsByClassName function is used to return collection of elements with
		specified className as ObjectHTMLCollection			
				
		syntax:
			var variableName=document.getElementByclassName("className")
				
		ex:
			<b class="a">PHP</b>
			<b class="a">JAVA</b>
			<b class="a">HTML</b>
			<b class="a">CSS</b>
		EXA:
		
			var x=document.getElementByclassName("a")[0].textContent//PHP
			var x=document.getElementByclassName("a")[0].textContent//JAVA
			var x=document.getElementByclassName("a")[0].textContent//HTML
			var x=document.getElementByclassName("a")[0].textContent//CSS
	
	=>querySelector: querySelector is used to return first matches element with specified selector name. 
		syntax:
		
			var variableName=document.querySelector("selectorName")
		
		Ex:
			<div>JS</div>
			<div>JAVA</div>
			<div>CSS</div>
			<div>HTML</div>
	
			var d=documant.querySelector("div").innerHTML//JS
			
	querySelectorAll(): is used to return collection of all matches element with specified selector name as NodeList object.
		
		Ex:
			<h1 class="a">JS</h1>
			<h1 class="b">JAVA</h1>
			<h1 class="a">CSS</h1>
			<h1 class="b">HTML</h1>
			
			<script>
			var h=document.querySelectorAll("h1")[0].innerText//JS
			var h=document.querySelectorAll("h1")[3].innerText//HTML
			var h=document.querySelectorAll("h1")[1].innerText//JAVA
			</script>
			
			
	=>classList: classList is a object providing some method realted to css class 
			add()
			remove ()
			toggle()
			contains()
	
			
		add(): 	add function is used to add css class to selected HTML Element.
			
			ex:
				.a
				{
					background:red;
					color:blue;
					height:300px;
					text-align:center;
				}
				document.getElementById("box").classList.add('a')
				
		remove(): remove function is used to remove CSS class from selected HTML element.
			
				
				
				
		toggle(): toggle function is used to provid toggle between add and remove function.


		contain():contain function is used to check whether given CSS class is added or not.
				
				=>It retunt if given CSS class is added otherwise return false.
				
				a.
				{
					background:red;
					color:blue;
					
				}
			<h1 class="a">HTML & CSS</h1>
				
				
				
		setAttribute(): setAttribute function is used to set attribute value to selected HTML element.
			syntax:
				document.querySelector("div").setAttribute("attributeName","value")
			Ex:
				<img src="add.jpg" id="im"/>
				document.querySelector("img").setAttribute("src","ab.jpg")
				document.querySelector("img").setAttribute("id","im")
				document.querySelector("img").setAttribute("class","c")
					
		getAttribute(): getAttribute function is used to get value of attribute of any selected HTML element.
			syntax:
				<img src="add.jpg" id="im" class="a"/>
				document.querySelector("img").getAttribute("src")//add.jpg
				document.querySelector("img").getAttribute("id")//im
				document.querySelector("img").getAttribute("class")//a
				
				
				       MATH.....MATH,,,,,,MATH.......MATH,,,,,,MATH
				
	Math=> Math is a object designed to provid some methods related to mathemetical operarion.			
				
		RANDOM:	random function is used to return random number between 0(inclusive)and 1(exclusive)	
			
			syntax:
					Math.random()//00
					MAth.random()//0.312
					MAth.random()//0.481
					MAth.random()//0.9999999
					
	ceil()---
	*******
		ceil function is used to return largest interger value of given number.
		Math.ceil(5.3)//6
	floor()----
	*******
		floor function is used to return lowest integer value of given number.
		Math.floor(4.678)//4
		Math.floor(0.678)//0
		Math.floor(5.78)//5
	round()----
	********
		round function is used to return closest integer value of given number.
		Math.round(5.07777)//5
		Math.round(5.77)//6
		Math.round(5.99)//6
	
	

sqrt(): =>Sqrt function is used to return square root value of given number.
		=>Negative value is not acceptable.
		=>If we try provide negative value then it returna NaN (Not a Number).
		
		syntax:
			Math.sqrt(number)
		ex:
			document.write(Math.sqrt(16))//4
			document.write(Math.sqrt(16))//NaN
			document.write(Math.PI)//3.14678
				
				
cbrt: 	=>cbrt function is used to find cube root value of given number
		=>Negative value is acceptable here.
		  
		syntax:
			Math.cbrt(number)
		
		Ex:
			document.write(Math.cbtr(27));//3
			document.write(Math.cbtr(-27));//-3
				
				
pow(): 	=>pow function is used to calculate power value wrt x power y
		=>x=base value
		=>y=power value
			
			syntax:
				Math.pow(x,y);
			Ex:
				document.write(Math.pow(2,4))//16
				
min():	=>min function is used to return minimum value of given number
			
			syntax:
				Math.min(number1,number2,.....numberN)
				
			Ex:
				document.write(Math.min(10,20,30,))//10
max(): => max function is used to return maximum value of given number.
			syntax:
				Math.max(num1,num2,num3....numN);
			Ex:
			document.write(Math.max(10,20,30,))//30	
				
log(): => log function is used to return logrithm value of give number wrt to base.
			
			sentax:
				Math.log(number)
			Ex: 
				document.write(Math.log(10))//1
	

Array of object:
		 => it is collection multiple object
			syntax:
				var arrobj=[{},{},{},{},.....{}];
			Ex:
				var studentInfo=[
				{Name:"Shohan",Collage:"DCCD",age:23,branch:"CS"},
				{Name:"Sona",Collage:"DHJH",age:18,branch:"EE"},
				{Name:"ROHAN",Collage:"SASH",age:24,branch:"ME"},//Trailling Comma
				]
	How to access element of array of object ?
	-----------------------------------------
				studentInfo[0].name// Shohan
				studentInfo[0].Collage// DCCD
				studentInfo[2].age// 24
				studentInfo[1].branch// EE
			
	addEventListener()
		
		=> this function is used to add events to the selected HTML element.
		=> We can add more then one events at a time on selected HTML element.
			
			Syntax:
					objOfHTMLElement.addEventListener("eventName",functionName());
			Ex:
				<script>
				var demo1=()=>{
								alert("HLLO I AM FROM DEMO1 :")
								}
								
								var demo2=()=>{
								alert("HLLO I AM FROM DEMO2 :")
								}
								var demo3=()=>{
								alert("HLLO I AM FROM DEMO3 :")
								}
								var demo4=()=>{
								alert("HLLO I AM FROM DEMO4 :")
								}
							document.querySelector("button").addEventListener("click",demo1())
							document.querySelector("button").addEventListener("click",demo2())
							document.querySelector("button").addEventListener("click",demo3())
							or
							document.querySelector("button").addEventListenter("dblclick",()=>{
								alert("HELLO THE I AM FROM ANOYMOUS FUN")
							})
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	