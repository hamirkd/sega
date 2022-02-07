import { Societe } from './societe.model';

export class Rubrique {
    id?:number;
    societe?: Societe;
    societe_id?: number;
    code: string;
    sens: string;
    intitule: string;
    type: string;
    gain: string;
    imprimable: string;
    constructor(rubrique) {
        this.id = rubrique.id;
        this.societe = rubrique.societe;
        this.societe_id = rubrique.societe_id;
        this.code = rubrique.code;
        this.sens = rubrique.sens;
        this.intitule = rubrique.intitule;
        this.type = rubrique.type;
        this.gain = rubrique.gain;
        this.imprimable = rubrique.imprimable;
    }
    
    copy?(rubrique) {
        this.societe = rubrique.societe;
        this.societe_id = rubrique.societe_id;
        this.code = rubrique.code;
        this.sens = rubrique.sens;
        this.intitule = rubrique.intitule;
        this.type = rubrique.type;
        this.gain = rubrique.gain;
        this.imprimable = rubrique.imprimable;
    }
}
