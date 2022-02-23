import { Injectable } from '@angular/core';
import { TraitementDas } from 'app/models/traitement-das.model';
import { Observable } from 'rxjs';
import { ApiService } from './api.service';
import { SocieteService } from './societe.service';

@Injectable({
  providedIn: 'root'
})
export class TraitementDasService {

  constructor(private _societeService:SocieteService,private apiService: ApiService) { }
  
  
  getAlls(): Observable<TraitementDas[]> {
    return this.apiService.get('api/traitement-das');
}
  
getAllByCurrentSociete(): Observable<TraitementDas[]> {
  return this.apiService.get('api/traitement-das/societe/'+this._societeService.activeSociete.id);
}
  
get(id): Observable<TraitementDas> {
  return this.apiService.get('api/traitement-das/'+id);
}

  add(traitementDas: TraitementDas): Observable<TraitementDas> {
    const societe_id = this._societeService.activeSociete.id;
    traitementDas.societe_id = societe_id;
    console.log(traitementDas)
      return this.apiService.post('api/traitement-das', traitementDas);
  }

  update(traitementDas: TraitementDas): Observable<TraitementDas> {
      const societe_id = this._societeService.activeSociete.id;
      traitementDas.societe_id = societe_id;
      return this.apiService.put('api/traitement-das/'+traitementDas.id , traitementDas);
  }

  
  edit11(d:{annee,societe_id}): Observable<any> {
    return this.apiService.post2('api/traitement-das/edit11', d);
  }
  
  edit10xls(d:{annee,societe_id}): Observable<any> {
    return this.apiService.post2('api/traitement-das/edit10xls', d);
  }
  
  getByAnnee(d:{societe_id,annee}): 
  Observable<any> {
    console.log(d);
    return this.apiService.post('api/traitement-das/getByAnnee', d);
  }

  saveManySalariesInTraitementDas(traitementDasSalarie:{salaries,annee,societe_id}): Observable<any> {
    console.log(traitementDasSalarie);
    return this.apiService.post('api/traitement-das/saveManySalariesInTraitementDas',traitementDasSalarie);
  }
  getSalariesByAnneeSociete(traitementDasSalarie:{annee,societe_id}): Observable<any> {
    console.log(traitementDasSalarie);
    return this.apiService.post('api/traitement-das/getSalariesByAnneeSociete',traitementDasSalarie);
  }
  
  
  delete(traitementDas: TraitementDas): Observable<any> {
      return this.apiService.delete('api/traitement-das/'+ traitementDas.id);
  }
}
