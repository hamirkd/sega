    export class Rubrique{
        code:string;
        sens:string;
        intitule:string;
        type:string;
        gain:string;
        imprimable:string;
      constructor(rubrique) { 
          this.code=rubrique.code;
          this.sens=rubrique.sens;
          this.intitule=rubrique.intitule;
          this.type=rubrique.type;
          this.gain=rubrique.gain;
          this.imprimable=rubrique.imprimable;
          }
  
  }