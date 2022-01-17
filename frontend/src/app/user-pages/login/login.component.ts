import { Component, OnInit } from '@angular/core';
import { ToastrManager } from 'ng6-toastr-notifications';
import {NgForm} from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {

  user :{login,password}={login:"",password:""}
  constructor(public toastr: ToastrManager, public router: Router) { }

 

  ngOnInit() {
  }
  login(){
    
      if(this.user.login=='admin@elite-afrique.com' && this.user.password =='admin@elite-afrique.com'){
        this.toastr.successToastr('Bienvenue parmis nous', 'Alert!',{animate:'fade'});
        localStorage.setItem("token",JSON.stringify(this.user))
        this.router.navigate(['dashboard']);
      }
      else{
        this.toastr.errorToastr('Veuillez verifier vos identifiants', 'Alert!',{animate:'fade'});
        console.log(this.user)
      }
  }

}
