import { Injectable } from '@angular/core';
import { SalarieComplement } from 'app/models/salarie-complement-1.model';
import { TraitementDts } from 'app/models/traitement-dts.model';
import { Observable } from 'rxjs';
import { ApiService } from './api.service';
import { SocieteService } from './societe.service';

@Injectable({
  providedIn: 'root'
})
export class TraitementDtsService {

  constructor(private _societeService:SocieteService,private apiService: ApiService) { }
  
  
  getAlls(): Observable<TraitementDts[]> {
      return this.apiService.get('api/traitement-dts');
  }
    
  getAllByCurrentSociete(): Observable<TraitementDts[]> {
    return this.apiService.get('api/traitement-dts/societe/'+this._societeService.activeSociete.id);
  }
    
  get(id): Observable<TraitementDts> {
    return this.apiService.get('api/traitement-dts/'+id);
  }

  add(traitementDas: TraitementDts): Observable<TraitementDts> {
    const societe_id = this._societeService.activeSociete.id;
    traitementDas.societe_id = societe_id;
    console.log(traitementDas)
      return this.apiService.post('api/traitement-dts', traitementDas);
  }

  update(traitementDas: TraitementDts): Observable<TraitementDts> {
      const societe_id = this._societeService.activeSociete.id;
      traitementDas.societe_id = societe_id;
      return this.apiService.put('api/traitement-dts/'+traitementDas.id , traitementDas);
  }

  updateSalarie(salarie: SalarieComplement): Observable<TraitementDts> {
    console.log(salarie)
      return this.apiService.put('api/traitement-dts/updateSalarie/'+salarie.id, salarie);
  }

  
  edit11(d:{trimestre,annee,societe_id}): Observable<any> {
    return this.apiService.post2('api/traitement-dts/edit11', d);
  }
  
  edit10xls(d:{trimestre,annee,societe_id}): Observable<any> {
    return this.apiService.post2('api/traitement-dts/edit10xls', d);
  }
  
  editDTS_CNSSxls1(d:{trimestre,annee,societe_id}): Observable<any> {
    console.log(d)
    return this.apiService.post2('api/traitement-dts/editDTS_CNSSxls1', d);
  }
  
  editDTS_CNSSxls2(d:{trimestre,annee,societe_id}): Observable<any> {
    console.log(d)
    return this.apiService.post2('api/traitement-dts/editDTS_CNSSxls2', d);
  }
  
  editDTS_CNSSxls2_2(d:{trimestre,annee,societe_id}): Observable<any> {
    console.log(d)
    return this.apiService.post2('api/traitement-dts/editDTS_CNSSxls2_2', d);
  }
  
  editDTS_CNAMGSxls(d:{trimestre,annee,societe_id}): Observable<any> {
    console.log(d)
    return this.apiService.post2('api/traitement-dts/editDTS_CNAMGSxls', d);
  }
  editDTS_CNSS_RECAPxlsx(d:{trimestre,annee,societe_id}): Observable<any> {
    console.log(d)
    return this.apiService.post2('api/traitement-dts/editDTS_CNSS_RECAPxlsx', d);
  }
  
  getByTrimestreAnnee(d:{societe_id,trimestre,annee}): 
  Observable<any> {
    console.log(d);
    return this.apiService.post('api/traitement-dts/getByTrimestreAnnee', d);
  }

  saveManySalariesInTraitementDts(traitementDasSalarie:{salaries,trimestre,annee,societe_id}): Observable<any> {
    console.log(traitementDasSalarie);
    return this.apiService.post('api/traitement-dts/saveManySalariesInTraitementDts',traitementDasSalarie);
  }
  
  deleteManySalariesInTraitementDts(traitementDasSalarie:{ids:number[]}): Observable<any> {
    console.log(traitementDasSalarie);
    return this.apiService.post('api/traitement-dts/deleteManySalariesInTraitementDts',traitementDasSalarie);
  }
  
  getSalariesByTrimestreAnneeSociete(traitementDasSalarie:{trimestre,annee,societe_id}): Observable<any> {
    console.log(traitementDasSalarie);
    return this.apiService.post('api/traitement-dts/getSalariesByTrimestreAnneeSociete',traitementDasSalarie);
  }
  
  
  delete(traitementDas: TraitementDts): Observable<any> {
      return this.apiService.delete('api/traitement-dts/'+ traitementDas.id);
  }
}
