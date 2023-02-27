import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { ContactosService } from "../contactos.service"
import { Contacto } from '../../model/contacto';
import { MatSnackBar } from '@angular/material/snack-bar';
@Component({
  selector: 'app-editar-contacto',
  templateUrl: './editar-contacto.component.html',
  styleUrls: ['./editar-contacto.component.css']
})
export class EditarContactoComponent implements OnInit {

  contacto: Contacto = new Contacto(-1,"", "", "");

  constructor(private route: ActivatedRoute,
    private router: Router, private contactosService: ContactosService,
    private snackBar: MatSnackBar) { }

  ngOnInit() {
    let idcontacto = this.route.snapshot.paramMap.get("id");
  
    //this.contactosService.getContacto(Number(idcontacto)).subscribe((contacto:any) => this.contacto = contacto)
  

    this.contactosService.getContacto(idcontacto).subscribe(
      (result:any)=>{
        console.log(result);
        this.contacto = result;
       
      });
        console.log(this.contacto);  
  }

  volver() {
    this.router.navigate(['/contactos']);
  }

  onSubmit() {
    this.contactosService.updateContacto(this.contacto).subscribe(() => {
      this.snackBar.open('contacto actualizada', undefined, {
        duration: 1500,
      });
      this.volver();
    });
  }

}