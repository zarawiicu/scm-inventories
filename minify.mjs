import { minify } from "minify";
import tryToCatch from 'try-to-catch';
import fs from 'fs';
import logSymbols from "log-symbols";
import chalk from 'chalk';

const options = {
  "js": {
    "ecma": 5
  },
  "css": {
    "compatibility": "*"
  },
};

async function init() {
  //CONTOH MEMBUAT MINIFY FILE
  writeMinify('./assets/css/loading.css', './assets/css/loading.min.css');
  writeMinify('./assets/js/jqueryhelper.js', './assets/js/jqueryhelper.min.js');
}

async function writeMinify(path, minifypath) {
  const [error, data] = await tryToCatch(minify, path, options);
  if (error) {
    console.log(error);
  }
  else {
    fs.writeFile(minifypath, data, function (err) {
      if (err) console.error(err);
      else {

        const m = pathDrawer(minifypath);
        const p = pathDrawer(path);

        console.log(chalk.blueBright("success write ") + chalk.green(m.folder + "/" + m.file) + chalk.cyanBright(" from ") + chalk.magenta(p.folder + "/" + p.file) + " " + logSymbols.success);
      }
    });
  }

}

function pathDrawer(path) {
  const pathParse = path.split('/');
  let pathFolder = [];

  for (let i = 0; i < pathParse.length - 1; i++) {
    pathFolder.push(pathParse[i]);
  }

  const pathFile = chalk.bold(pathParse[pathParse.length - 1]);
  const pathFolderParse = pathFolder.join('/');
  return {
    folder: pathFolderParse,
    file: pathFile
  };
}

init();