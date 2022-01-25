import { Component, OnInit } from "@angular/core";
import { ToastrManager } from "ng6-toastr-notifications";
import { NgForm } from "@angular/forms";
import { Router } from "@angular/router";
import { UserService } from "src/app/services/user.service";

@Component({
  selector: "app-login",
  templateUrl: "./login.component.html",
  styleUrls: ["./login.component.scss"],
})
export class LoginComponent implements OnInit {
  loading = false;
  user: { login; password } = { login: "", password: "" };
  constructor(
    public toastr: ToastrManager,
    public router: Router,
    private userService: UserService
  ) {}

  ngOnInit() {}

  login() {

    this.userService
      .loginUserByLoginAndPassword(this.user.login, this.user.password)
      .subscribe(
        (data) => {
          localStorage.setItem("user_access", JSON.stringify(data));
          this.loading = false;
          this.toastr.successToastr(
            "Bienvenue parmis nous",
            "Authentification",
            { animate: "fade" }
          );

          this.router.navigate(["dashboard"]);
        },
        (err) => {
          console.log(err);
          this.toastr.errorToastr(
            "Impossible de se connecter, veuillez vérifier vos identifiants",
            "Authentification",
            { animate: "fade" }
          );
        }
      );
  }
}
