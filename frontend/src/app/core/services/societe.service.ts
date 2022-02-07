import { Injectable } from '@angular/core';
import { Societe } from 'app/models/societe.model';
import { _DATA_SOCIETE } from 'app/modules/admin/societes/list/_data';
import { Observable } from 'rxjs';
import { ApiService } from './api.service';

@Injectable({
    providedIn: 'root',
})
export class SocieteService {
    constructor(private apiService: ApiService) {}

    getAll() {
        return _DATA_SOCIETE;
    }
    
    getAll1(): Observable<Societe[]> {
      return this.apiService.get('api/societe');
  }

    add(societe: Societe): Observable<Societe> {
        return this.apiService.post('api/societe', societe);
    }

    update(societe: Societe): Observable<Societe> {
        return this.apiService.put('api/societe/'+societe.id, societe);
    }

    set activeSociete(societe: Societe) {
        localStorage.setItem('activeSociete', JSON.stringify(societe));
    }

    get activeSociete() {
        if (!localStorage.getItem('activeSociete')) return new Societe({});
        return JSON.parse(localStorage.getItem('activeSociete'));
    }
}
