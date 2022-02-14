import { Injectable } from '@angular/core';
import { DeclarationRetenue } from 'app/models/declaration-retenue.model';
import { Observable } from 'rxjs';
import { ApiService } from './api.service';
import { SocieteService } from './societe.service';

@Injectable({
  providedIn: 'root'
})
export class DeclarationRetenueService {

  constructor(private _societeService:SocieteService,private apiService: ApiService) { }
  
  
  getAlls(): Observable<DeclarationRetenue[]> {
    return this.apiService.get('api/declaration-retenue');
}
  
getAllByCurrentSociete(): Observable<DeclarationRetenue[]> {
  return this.apiService.get('api/declaration-retenue/societe/'+this._societeService.activeSociete.id);
}
  
get(id): Observable<DeclarationRetenue> {
  return this.apiService.get('api/declaration-retenue/'+id);
}

  add(declarationRetenue: DeclarationRetenue): Observable<DeclarationRetenue> {
    const societe_id = this._societeService.activeSociete.id;
    declarationRetenue.societe_id = societe_id;
      return this.apiService.post('api/declaration-retenue', declarationRetenue);
  }

  update(declarationRetenue: DeclarationRetenue): Observable<DeclarationRetenue> {
      const societe_id = this._societeService.activeSociete.id;
      declarationRetenue.societe_id = societe_id;
      return this.apiService.put('api/declaration-retenue/'+declarationRetenue.id , declarationRetenue);
  }
  
  delete(declarationRetenue: DeclarationRetenue): Observable<any> {
      return this.apiService.delete('api/declaration-retenue/'+ declarationRetenue.id);
  }
}
