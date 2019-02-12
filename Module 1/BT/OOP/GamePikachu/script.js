/**
 * Created by nhatnk on 4/26/17.
 * Edit: DanhNguyen Codegym 18/01/2019
 */
    function docReady(){
        window.addEventListener('keydown', moveSelection);
    }

    function moveSelection(evt) {
        switch (evt.keyCode) {
            case 37:
                console.log("left");
                direction = "LEFT";
                break;
            case 39:
            console.log("left");
                direction = "RIGHT";
                break;
            case 38:
            console.log("left");
                direction = "UP";
                break;
            case 40:
            console.log("left");
                direction = "DOWN";
                break;
        }
    }

    function Hero(image, top, left, size){
        this.speed = 20;
        this.image = image;
        this.top = top;
        this.left = left;
        this.size = size;
        this.direc = "RIGHT";
    
        this.getHeroElement = function(){
        return '<img width="'+ this.size + '"' +
            ' height="'+ this.size + '"' +
            ' src="' + this.image +'"' +
            ' style="top: '+this.top+'px; left:'+this.left+'px;position:absolute;" />';
        }
        this.moveRight = function(){
        this.left += this.speed;
        }
        this.moveLeft = function(){
            this.left-= this.speed;    
        }
        this.moveUp = function() {
            this.top-=this.speed;
        }
        this.moveDown = function() {
            this.top+=this.speed;
        }
    }
  
  var hero = new Hero('pikachu.png', 20, 30, 100);
  var direction = "RIGHT";

  function Main() {
      docReady();
      start();
  }
  
  function start(){
      if (hero.left>500) {
          direction= "LEFT";
      } else if (hero.left<0){
          direction= "RIGHT";
      } else if (hero.top>500) {
          direction= "UP";
      } else if (hero.top<0) {
          direction= "DOWN";
      };

        switch (direction) {
            case "UP":
                hero.moveUp();
                break;            
            case "DOWN":
                hero.moveDown();
                break;
            case "RIGHT":
                hero.moveRight();
                break;
            case "LEFT":
                hero.moveLeft();
                break;
            default:
          }
        
      

        document.getElementById('game').innerHTML = hero.getHeroElement();
        setTimeout(start, 100)
  }
  
  