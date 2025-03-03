<?php
/*
        A strings literals can be specified in four diffrent way :-

        -> single quotes.
        -> double quotes.
        -> heredoc syntax.
        -> newdoc syntax.

    */

/*
        Single quotes :-
                        single quotes don't consider any variable just print straight forword.
        Ex. 
            $x = 5;
            echo 'The number is $x';
                                        Output:- The number is $x.

    */

/*
        double quotes :-
                        double quotes consider varibles and put that value with the strings.
        Ex.
            $x = 5;
            echo "The number is $x ;
                                        Output:- The number is 5.
    
        Note :- 
                -> escaped character start with backslash(\);
                -> escape character are many like \t(tab), \n(new line), etc.
                -> confusing escape character is \f (form feed).
                -> Most interesting escape character is \ooo(Octal value convert into string)
                    and \xhh(hex value convert into string).


        Important -> 
                    -> \ooo :- Basically this is escaped character is one of the favorite 
                                because we write octal no. in the string with the help of \(backslash) and php provide us actual string.
                    Example :- suppose that we want write Sameer Kadyan.
                               We will help of ASCII value 

                               S = 83,  a = 97, m = 109, e = 101, r = 114, sapce = 32;
                               K = 75,  a = 97, d = 100, y = 121, a = 97, n = 110;

                               Dekh bhai Hum Octal numbers se strings likhenge aur ye jo uper values likhi hui hai ye ASCII table li hui hai to iska matlab ye hai ki ye decimal ki form me hai aur hame inhe octal me convert karna padega.


                               alphabet     Decimal No.        Octal No.

                                  S             83                123
                                  a             97                141
                                  m             109               155
                                  e             101               145
                
        


        
        
    */

?>
