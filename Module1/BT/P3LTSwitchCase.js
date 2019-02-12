// Bai 1
Switch(browser) {
    case 'Edge': 
        alert("You've got the Edge!");
        break;
    case 'Chrome':
    case 'Firefox':
    case 'Safari':
    case 'Opera': 
        alert( 'Okay we support these browsers too' );
        break;
    default:
        alert( 'We hope that this page looks ok!' );
  }

// Bai 2
    var a = prompt('a?', '');
    switch (a) {
        case 0:
        alert( 0 );
        break;
        case 1:
        alert( 1 );
        break;
        case 2:
        case 3:
        alert( '2,3' );
        break;
    }
  
