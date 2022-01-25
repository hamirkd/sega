import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { User } from '../models/user.model';
import { environment } from '../../environments/environment';
import { Observable } from 'rxjs';
import { AuthGuardService } from '../auth/auth-guard.service';
import { AuthService } from '../auth/auth.service';

@Injectable({
  providedIn: 'root'
})
export class UserService extends AuthService{

  constructor(public http: HttpClient) {
    super(http)
  }
  baseUrl = environment.urlapi + "/";
   
  loginUserByLoginAndPassword(login: string, password: string): Observable<any> {
    console.log(login,password)
    return this.http.post(this.baseUrl + 'api/auth/login', { email: login, password: password });
  }

  findUserById(): Observable<any> {
    return this.http.get(this.baseUrl + "api/auth/user-profile");
  }

  findAllUsers(): Observable<any>{
    return this.http.get(this.baseUrl + "api/auth/findAllUser");
  }

  deleteUser(user:User): Observable<any>{
    return this.http.delete(this.baseUrl + "api/auth/deleteUser/"+user.id);
  }

  bloquerUser(user:User): Observable<any>{
    return this.http.get(this.baseUrl + "api/auth/bloquerUser/"+user.id);
  }

  updateUser(user: User): Observable<any> {
    console.log(user)
    return this.http.put(this.baseUrl + "api/auth/update", user);
  }

  addAccount(user: User): Observable<any> {
    console.log(user);
    return this.http.post(this.baseUrl + 'api/auth/register', user);
  }

}
