import { HttpClient, HttpHeaders, HttpResponse } from '@angular/common/http';
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
      
      return this._httpClient.post(url,data);
    }
    
    put(url:string, data:any): Observable<any>{
      
      return this._httpClient.put(url,data);
    }
    get(url:string): Observable<any>{
      return this._httpClient.get(url);
    }

    delete(url:string): Observable<any>{
      return this._httpClient.delete(url);
    }
    
    post2(url:string, data:any): Observable<any>{
      console.log(url)
      return this._httpClient.post(url,data,{responseType: 'blob'});
    }

}
