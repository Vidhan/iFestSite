
           window.onload=initall;
            function initall(){
                document.getElementById("check").onclick = student;
                
            }
            
            
            
            function student(){
                if(document.getElementById("check").checked){
                    document.getElementById("show").innerHTML = studentform1(1);
                    document.getElementById("Teammember1").onblur = checkid;
                    document.getElementById("Teammember2").onblur = checkid;
                }
                else{
                    document.getElementById("show").innerHTML = studentform1(0);
                }
            }
            function checkid(evt){
                var evt = window.event.srcElement;
                var id = evt.value;
           
                if(evt.value.length == 9)
                {
                     id = parseInt(id);
                     document.getElementById("messagebox").innerHTML = ""; 
                }
                else{
                    document.getElementById("messagebox").innerHTML = "<strong><i>Please enter a valid college id</i>";                
                }
              
            }
            function studentform1(i){
                var formdata="";
                if(i){
                formdata =    "<table>";
                formdata = formdata+ "<tr>";
                formdata =formdata+  "<td>Team name*</td>";
                formdata = formdata + "<td><input type=\"text\" id=\"Teamname\" name=\"Teamname\"></td>";
                formdata = formdata + "</tr>";                                  
                formdata = formdata + "<tr>";                   
                formdata = formdata + "<td>Student1 Id*</td>";                                          
                formdata = formdata + "<td><input type=\"text\" id=\"Teammember1\" name=\"Teammember1\"></td> ";                        
                formdata = formdata + "</tr> ";
                formdata = formdata +  "<tr>"
                formdata = formdata +  "<td>Student2 Id</td>"
                formdata = formdata +  "<td><input type=\"text\" id=\"Teammember2\" name=\"Teammember2\"></td> ";                    
                formdata = formdata +  " </tr> " ;               
                formdata = formdata +  "<tr>";                    
                formdata = formdata +  "<td>Password*</td>";                       
                formdata = formdata +  "<td><input type=\"password\" id=\"passwd\"  name=\"passwd\"></td>";                       
                formdata = formdata +  " </tr> ";             
                formdata = formdata +  " <tr> ";                
                formdata = formdata +  "<td>Confirm password*</td> ";                      
                formdata = formdata +  " <td><input type=\"password\" id=\"confpasswd\" name=\"confpasswd\"></td>";                     
                formdata = formdata +  "</tr> ";              
                formdata = formdata +  "<tr>";               
                formdata = formdata +  "<td>Contact no*</td>";                     
                formdata = formdata +  "<td><input type=\"text\" id=\"contactno\" name=\"contactno\"></td></tr>";                   
                formdata = formdata + "<tr>"; 
                formdata = formdata + "<td>&nbsp;</td>";                        
                formdata = formdata + "<td>&nbsp;</td>";                        
                formdata = formdata + "</tr>";                    
                formdata = formdata + "<tr>";                   
                formdata = formdata + " <td></td>";                      
                formdata = formdata + "<td style=\"float:right\"><input type=\"submit\" id=\"submit\" name=\"submit\" value=\"Register\" </td>";                       
                formdata = formdata + "</tr>";                   
                formdata = formdata +  "</table>";      
                }
                else{
                formdata =    "<table>";
                formdata = formdata+ "<tr>";
                formdata =formdata+  "<td>Team name*</td>";
                formdata = formdata + "<td><input type=\"text\" id=\"Teamname\" name=\"Teamname\"></td>";
                formdata = formdata + "</tr>";                                  
                formdata = formdata + "<tr>";                   
                formdata = formdata + "<td>Team member1*</td>";                                          
                formdata = formdata + "<td><input type=\"text\" id=\"Teammember1\" name=\"Teammember1\"></td> ";                        
                formdata = formdata + "</tr> ";
                formdata = formdata +  "<tr>"
                formdata = formdata +  "<td>Team member2</td>"
                formdata = formdata +  "<td><input type=\"text\" id=\"Teammember2\" name=\"Teammember2\"></td> ";                    
                formdata = formdata +  " </tr> " ;               
                formdata = formdata +  "<tr>";                    
                formdata = formdata +  "<td>Password*</td>";                       
                formdata = formdata +  "<td><input type=\"password\" id=\"passwd\" name=\"passwd\"></td>";                       
                formdata = formdata +  " </tr> ";             
                formdata = formdata +  " <tr> ";                
                formdata = formdata +  "<td>Confirm password*</td> ";                      
                formdata = formdata +  " <td><input type=\"password\" id=\"confpasswd\" name=\"confpasswd\"></td>";                     
                formdata = formdata +  "</tr> ";              
                formdata = formdata +  "<tr>";               
                formdata = formdata +  "<td>Contact no*</td>";                     
                formdata = formdata +  "<td><input type=\"text\" id=\"contactno\" name=\"contactno\"></td>";                   
                formdata = formdata +  " <tr> ";                
                formdata = formdata +  "<td>Email Id</td> ";                      
                formdata = formdata +  " <td><input type=\"text\" id=\"emailid\" name=\"emailid\"></td>";                     
                formdata = formdata +  "</tr>";
                formdata = formdata + "<tr>"; 
                formdata = formdata + "<td>&nbsp;</td>";                        
                formdata = formdata + "<td>&nbsp;</td>";                        
                formdata = formdata + "</tr>";                    
                formdata = formdata + "<tr>";                   
                formdata = formdata + " <td></td>";                      
                formdata = formdata + "<td style=\"float:right\"><input type=\"submit\" id=\"submit\" name=\"submit\" value=\"Register\"></td>";                       
                formdata = formdata + "</tr>";      
                formdata = formdata +  "</table>";                
                
                
               
                }
                return formdata;
            }
     