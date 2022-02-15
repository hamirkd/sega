import { HttpClient, HttpResponse } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from 'environments/environment';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

    constructor( private _httpClient: HttpClient){

    }
    post(url:string, data:any): Observable<any>{
      
      return this._httpClient.post(environment.urlApi+url,data);
    }
    
    put(url:string, data:any): Observable<any>{
      
      return this._httpClient.put(environment.urlApi+url,data);
    }
    get(url:string): Observable<any>{
      return this._httpClient.get(environment.urlApi+url);
    }

    delete(url:string): Observable<any>{
      return this._httpClient.delete(environment.urlApi+url);
    }
    
    post2(url:string, data:any): Observable<any>{
      
      return this._httpClient.post(environment.urlApi+url,data,{responseType: 'blob'});
    }

}
