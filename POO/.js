
(function () {
  const fisioterapia = document.getElementById('fisioterapia');
  const Eletrotermofototerapia = document.getElementById('Eletrotermofototerapia');
  const cosmetologia = document.getElementById('cosmetologia');
  const disciplina = document.getElementById('disciplina');
  const fisioterapia1 = document.getElementById('fisioterapia1');
  const Eletrotermofototerapia1 = document.getElementById('Eletrotermofototerapia1');
  const cosmetologia1 = document.getElementById('cosmetologia1');
  const disciplina1 = document.getElementById('disciplina1');
  console.log(document.URL);
  if (document.URL === 'https://posgraduacao2.esteticaexperts.com.br/cursos/fisioterapia-dermatofuncional/') {
    Eletrotermofototerapia.style.display = 'none';
    cosmetologia.style.display = 'none';
    disciplina.style.display = 'none';
    Eletrotermofototerapia1.style.display = 'none';
    cosmetologia1.style.display = 'none';
    disciplina1.style.display = 'none';
  } else if (document.URL === 'https://posgraduacao2.esteticaexperts.com.br/cursos/estetica-e-cosmetologia-com-enfase-em-raciocinio-clinico/') {
    Eletrotermofototerapia.style.display = 'none';
    fisioterapia.style.display = 'none';
    disciplina.style.display = 'none';
    Eletrotermofototerapia1.style.display = 'none';
    fisioterapia1.style.display = 'none';
    disciplina1.style.display = 'none';
  } else if (document.URL === 'https://posgraduacao2.esteticaexperts.com.br/cursos/eletrotermofototerapia/') {
    cosmetologia.style.display = 'none';
    fisioterapia.style.display = 'none';
    disciplina.style.display = 'none';
    cosmetologia1.style.display = 'none';
    fisioterapia1.style.display = 'none';
    disciplina1.style.display = 'none';
  } else if (document.URL === 'https://posgraduacao2.esteticaexperts.com.br/cursos/cursos-cosmetologia-clinica/') {
    Eletrotermofototerapia.style.display = 'none';
    fisioterapia.style.display = 'none';
    cosmetologia.style.display = 'none';
    Eletrotermofototerapia1.style.display = 'none';
    fisioterapia1.style.display = 'none';
    cosmetologia1.style.display = 'none';
  }

})();
