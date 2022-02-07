import { Injectable } from '@angular/core';
import { Salarie } from 'app/models/salarie.model';
import { Societe } from 'app/models/societe.model';
import { Observable } from 'rxjs';
import { _DATA_SALARIES } from '../data-test/data-salaries';
import { ApiService } from './api.service';
import { SocieteService } from './societe.service';

@Injectable({
  providedIn: 'root'
})
export class SalarieService {

  constructor(private _societeService:SocieteService,private apiService: ApiService) { }
 

  getAll():Salarie[]{
    const societe_id = this._societeService.activeSociete.id
    return _DATA_SALARIES.filter(s=>s.societe_id==societe_id);
  }
  
  getAlls(): Observable<Salarie[]> {
    return this.apiService.get('api/salarie');
}
  
get(id): Observable<Salarie> {
  return this.apiService.get('api/salarie/'+id);
}

  add(salarie: Salarie): Observable<Salarie> {
      return this.apiService.post('api/salarie', salarie);
  }

  update(salarie: Salarie): Observable<Salarie> {
      console.log(salarie)
      return this.apiService.put('api/salarie/'+salarie.id , salarie);
  }
  
  delete(salarie: Salarie): Observable<any> {
      return this.apiService.delete('api/salarie/'+ salarie.id);
  }

}
