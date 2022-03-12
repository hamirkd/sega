import { Injectable } from '@angular/core';
import { DasQuittances } from 'app/models/das-quittance.model';
import { Observable } from 'rxjs';
import { ApiService } from './api.service';
import { SocieteService } from './societe.service';

@Injectable({
  providedIn: 'root'
})
export class DasQuittancesService {

 
  constructor(private _societeService:SocieteService,private apiService: ApiService) { }
  
  
  getAlls(): Observable<DasQuittances[]> {
    return this.apiService.get('api/das-quittances');
}
  
getAllByCurrentSociete(data:{annee,societe_id}): Observable<DasQuittances[]> {

  return this.apiService.post('api/das-quittances/getAll',data);
}
  
get(id): Observable<DasQuittances> {
  return this.apiService.get('api/das-quittances/'+id);
}

  add(dasQuittances: DasQuittances): Observable<DasQuittances> {
    const societe_id = this._societeService.activeSociete.id;
    dasQuittances.societe_id = societe_id;
    console.log(dasQuittances)
      return this.apiService.post('api/das-quittances', dasQuittances);
  }

  update(dasQuittances: DasQuittances): Observable<DasQuittances> {
      const societe_id = this._societeService.activeSociete.id;
      dasQuittances.societe_id = societe_id;
      return this.apiService.put('api/das-quittances/'+dasQuittances.id , dasQuittances);
  }

  
  edit11(d:{mois,annee,societe_id}): Observable<any> {
    return this.apiService.post2('api/das-quittances/edit11', d);
  }
  
  edit10xls(d:{mois,annee,societe_id}): Observable<any> {
    return this.apiService.post2('api/das-quittances/edit10xls', d);
  }
  
  getByMoisAnnee(d:{societe_id,mois,annee}): 
  Observable<any> {
    console.log(d);
    return this.apiService.post('api/das-quittances/getByMoisAnnee', d);
  }

  saveManySalariesInDeclarationRetenu(dasQuittancesSalarie:{salaries,mois,annee,societe_id}): Observable<any> {
    console.log(dasQuittancesSalarie);
    return this.apiService.post('api/das-quittances/saveManySalariesInDeclarationRetenu',dasQuittancesSalarie);
  }
  getSalariesByMoisAnneeSociete(dasQuittancesSalarie:{mois,annee,societe_id}): Observable<any> {
    console.log(dasQuittancesSalarie);
    return this.apiService.post('api/das-quittances/getSalariesByMoisAnneeSociete',dasQuittancesSalarie);
  }
  
  
  delete(dasQuittances: DasQuittances): Observable<any> {
      return this.apiService.delete('api/das-quittances/'+ dasQuittances.id);
  }
}
