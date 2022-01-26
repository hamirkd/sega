// src/app/auth/auth.service.ts
import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { JwtHelperService } from '@auth0/angular-jwt';
import { Observable } from 'rxjs';
import { environment } from 'src/environments/environment';
import { User } from '../models/user.model';
@Injectable()
export class AuthService {
  baseUrl = environment.urlapi + "/";

  constructor(public http: HttpClient) {}
  // ...
  public isAuthenticated(): boolean {
    const token = localStorage.getItem('token');
    // Check whether the token is expired and return
    // true or false
    // return !this.jwtHelper.isTokenExpired(token);
    return token!=undefined;
  }

  get userData() {
    return JSON.parse(localStorage.getItem("user_access")).user;
  }
  
  logout() {
    localStorage.removeItem('token')
    this.http.post(this.baseUrl+'api/auth/logout',{});
  }


  
  sendPasswordLinkReset(email: string): Observable<any> {
    return this.http.post(this.baseUrl + 'api/password-forget', { email: email });
  }
  
  verifyValidToken(token: string): Observable<any> {
    return this.http.post(this.baseUrl + 'api/password-verify', { token: token });
  }
  resetPassword(user: User): Observable<any> {
    console.log(user)
    return this.http.post(this.baseUrl + 'api/password-init', { email:user.email,
    password:user.password,password_confirmation:user.password_confirmation });
  }


}