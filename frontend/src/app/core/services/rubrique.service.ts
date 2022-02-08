import { Injectable } from '@angular/core';
import { Rubrique } from 'app/models/rubrique.model';
import { Observable } from 'rxjs';
import { _DATA_RUBRIQUES } from '../data-test/data-rubriques';
import { ApiService } from './api.service';
import { SocieteService } from './societe.service';

@Injectable({
    providedIn: 'root',
})
export class RubriqueService {
    constructor(
        private _societeService: SocieteService,
        private apiService: ApiService
    ) {}

    

    getAlls(): Observable<Rubrique[]> {
        return this.apiService.get('api/rubrique');
    }

    getAllByCurrentSociete(): Observable<Rubrique[]> {
        return this.apiService.get(
            'api/rubrique/societe/' + this._societeService.activeSociete.id
        );
    }

    get(id): Observable<Rubrique> {
        return this.apiService.get('api/rubrique/' + id);
    }

    add(rubrique: Rubrique): Observable<Rubrique> {
        const societe_id = this._societeService.activeSociete.id;
        rubrique.societe_id = societe_id;
        return this.apiService.post('api/rubrique', rubrique);
    }

    update(rubrique: Rubrique): Observable<Rubrique> {
        const societe_id = this._societeService.activeSociete.id;
        rubrique.societe_id = societe_id;
        return this.apiService.put('api/rubrique/' + rubrique.id, rubrique);
    }

    delete(rubrique: Rubrique): Observable<any> {
        return this.apiService.delete('api/rubrique/' + rubrique.id);
    }

    deleteAllByCurrentSociete(): Observable<any> {
        return this.apiService.delete(
            'api/rubrique/societe/' + this._societeService.activeSociete.id
        );
    }
}
