import { Component } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  recipeName: any;
  description: any;

  constructor(
    public _apiService: ApiService
  ) {}

  //adding recipe to database
  addRecipe() {
    console.log(this.recipeName, this.description)

    let data = {
      recipeName: this.recipeName,
      description: this.description
    };

    this._apiService.addRecipe(data).subscribe(
      (res:any) => {
      console.log("Success ===", res);
    },
    (error:any) => {
      console.log("ERROR ===", error);
    });
  }

}
