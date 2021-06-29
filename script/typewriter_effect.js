//Typewriting effect
let app = document.getElementById('app');
let typewriter = new Typewriter(app, {
    loop: true
});
console.log(app);
typewriter.typeString('développeur web')
  .pauseFor(0)
  .deleteAll()
  .typeString('web designer')
  .pauseFor(0)
  .deleteAll()
  .typeString('futur papa')
  .pauseFor(0)
  .deleteAll()
  .typeString('marathonien')
  .pauseFor(0)
  .deleteAll()
  .typeString('sosie de The Rock')
  .pauseFor(0)
  .deleteAll()
  .typeString('Oubliez la dernière phrase...')
  .pauseFor(0)
  .deleteAll()
  .typeString('<del>sosie de The Rock</del>')
  .pauseFor(0)
  .deleteAll()
  .start();