var selecObj = {
    "Metropolitana": {
        "La Florida": [""],
        "Ñuñoa": [""],
        "Macul": [""]
    },
    "Antofagasta": {
        "Mejillones": [""],
        "Sierra Gorda": [""],
        "Taltal": [""]
    },
    "Valparaíso": {
        "Concón": [""],
        "Quintero": [""],
        "Casablanca": [""]
      }
  }
  window.onload = function() {
    var regionSel = document.getElementById("region");
    var comunaSel = document.getElementById("comuna");
    for (var x in selecObj) {
        regionSel.options[regionSel.options.length] = new Option(x, x);
    }
    regionSel.onchange = function() {
      comunaSel.length = 1;
      for (var y in selecObj[this.value]) {
        comunaSel.options[comunaSel.options.length] = new Option(y, y);
      }
    }
  }