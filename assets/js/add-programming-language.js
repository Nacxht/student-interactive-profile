function addProgrammingLanguage() {
  const programmingInputs = document.querySelector(
    ".programming-language-input"
  );

  const newInput = document.createElement("input");
  newInput.type = "text";
  newInput.name = "programming-languages[]";
  newInput.placeholder = "Contoh: Java, Rust, C++, C#, dsb";
  newInput.required = true;

  programmingInputs.appendChild(newInput);
}
