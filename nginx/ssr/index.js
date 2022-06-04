// common functions
function get_btn (textnode, class_, id, function_) {
  const btn = document.createElement('button');
  const text_node = document.createTextNode(textnode);
  btn.appendChild(text_node);
  btn.setAttribute('type', 'button');
  btn.setAttribute('class', class_);
  btn.setAttribute('id', id);
  btn.setAttribute('onclick', function_);
  return btn;
}

function get_input (type, class_, name, placeholder) {
  const input = document.createElement('input');
  input.setAttribute('type', type);
  input.setAttribute('class', class_);
  input.setAttribute('name', name);
  input.setAttribute('placeholder', placeholder);
  return input;
}

function get_label (textnode, class_) {
  const label = document.createElement('label');
  const text_node = document.createTextNode(textnode);
  label.appendChild(text_node);
  label.setAttribute('class', class_);
  return label;
}

function get_tds (elements) {
  const tds = [];

  for (let i = 0; i < elements.length; i++) {
    const td = document.createElement('td');
    td.appendChild(elements[i]);
    tds.push(td);
  }

  return tds;
}

function get_ths (elements) {
  const ths = [];

  for (let i = 0; i < elements.length; i++) {
    const th = document.createElement('th');
    th.appendChild(elements[i]);
    ths.push(th);
  }

  return ths;
}

function get_tr (tds_or_ths) {
  const tr = document.createElement('tr');

  for (let i = 0; i < tds_or_ths.length; i++) {
    tr.appendChild(tds_or_ths[i]);
  }

  return tr;
}

function add_tr_in_thead (elements, thead) {
  const ths = get_ths(elements);
  const tr = get_tr(ths);
  thead.appendChild(tr);
}

function add_tr_in_tbody (elements, tbody) {
  const tds = get_tds(elements);
  const tr = get_tr(tds);
  tbody.appendChild(tr);
}

function get_table(){
  const table = document.createElement('table');
  const thead = document.createElement('thead');
  const tbody = document.createElement('tbody');
  table.setAttribute('class', 'table');
  table.appendChild(thead);
  table.appendChild(tbody);
  return table;
}

function delete_tr (delete_btn) {
  delete_btn.closest('tr').remove();
}

function delete_table (delete_btn) {
  delete_btn.closest('table').remove();
}


// ajax_section
const title_of_ajax_section = document.getElementById('title_of_ajax_section');
const ajax_inputs = document.getElementById('ajax_inputs');

function create_ajax_inputs (use_btn) {
  use_btn.remove();
  const label_for_xpath_for_ajax = get_label('xpath for ajax(click)', 'mb-1');
  const xpath_for_ajax = get_input('text', 'form-control mb-1', 'xpath_for_ajax', 'e.g. /html/body/div');
  const not_use_btn = get_btn('not use', 'btn btn-danger mb-1', '', 'delete_ajax_inputs()');
  const elements = [label_for_xpath_for_ajax, xpath_for_ajax, not_use_btn];

  for (let i = 0; i < elements.length; i++) {
    ajax_inputs.appendChild(elements[i])
  }
}

function delete_ajax_inputs () {
  ajax_inputs.innerHTML = '';
  const use_btn = get_btn('use', 'btn btn-primary mb-1', '', 'create_ajax_inputs(this)');
  title_of_ajax_section.appendChild(use_btn);
}


// column_numbers_to_scrape_section
const add_btn_for_column_numbers_to_scrape = document.getElementById('add_btn_for_column_numbers_to_scrape');
const table_for_column_numbers_to_scrape = document.getElementById('table_for_column_numbers_to_scrape');

add_btn_for_column_numbers_to_scrape.onclick = function () {
  const column_number_to_scrape = get_input('number', 'form-control', 'column_numbers_to_scrape[]', 'e.g. 1');
  column_number_to_scrape.setAttribute('min', '1');
  column_number_to_scrape.setAttribute('step', '1');
  const title = get_input('text', 'form-control', 'titles[]', 'e.g. price');
  const delete_btn = get_btn('delete', 'btn btn-danger', '', 'delete_tr(this)');
  const elements = [column_number_to_scrape, title, delete_btn];
  add_tr_in_tbody(elements, table_for_column_numbers_to_scrape.querySelector('tbody'));
}


// column_numbers_to_click_section
const column_numbers_to_click_section = document.getElementById('column_numbers_to_click_section');
const column_numbers_to_click_label = document.getElementById('column_numbers_to_click_label');

function add_3_tds (add_btn) {
  const element_1 = document.createTextNode('');
  const element_2 = document.createTextNode('');
  const element_3 = document.createTextNode('');
  const element_4 = get_input('text', 'form-control', 'titles[]', 'e.g. price');
  const element_5 = get_input('text', 'form-control', 'xpaths_to_scrape_in_a_new_page[]', 'e.g. /html/body/div');
  const element_6 = get_btn('delete', 'btn btn-danger', '', 'delete_tr(this)');
  const elements = [element_1, element_2, element_3, element_4, element_5, element_6];
  add_tr_in_tbody(elements, add_btn.closest('table').querySelector('tbody'));
}

function get_column_number_from_xpath (input_for_xpath_of_element_to_click_in_the_table) {
  const td_for_column_number_from_xpath = input_for_xpath_of_element_to_click_in_the_table.closest('td').nextElementSibling;
  const td_part_of_xpath = input_for_xpath_of_element_to_click_in_the_table.value.match(/td\[[0-9]+\]/); //match method returns array

  if (td_part_of_xpath !== null) {
    const column_number = td_part_of_xpath[0].match(/[0-9]+/);
    td_for_column_number_from_xpath.innerHTML = column_number[0];
  }else {
    td_for_column_number_from_xpath.innerHTML = '';
  }
}

function delete_column_numbers_to_click_table(delete_btn) {
  delete_btn.closest('table').remove();
  const column_numbers_to_click_label = document.getElementById('column_numbers_to_click_label');
  const add_btn = get_btn('add', 'btn btn-primary', '', 'create_column_numbers_to_click_table(this)')
  column_numbers_to_click_label.appendChild(add_btn);
}

let x = 0;

function create_column_numbers_to_click_table(add_btn) {
  const table = get_table();

  const element_for_th_1 = document.createTextNode('xpath of element to click in the table');
  const element_for_th_2 = document.createTextNode('column number');
  const element_for_th_3 = document.createTextNode('');
  const element_for_th_4 = document.createTextNode('title');
  const element_for_th_5 = document.createTextNode('xpath to scrape in a new page');
  const element_for_th_6 = document.createTextNode('');
  const elements_for_ths = [element_for_th_1, element_for_th_2, element_for_th_3, element_for_th_4, element_for_th_5, element_for_th_6];
  add_tr_in_thead(elements_for_ths, table.querySelector('thead'));

  const element_for_td_1 = get_input('text', 'form-control', 'xpath_of_a', 'e.g. /html/body/div');
  element_for_td_1.setAttribute('onkeyup', 'get_column_number_from_xpath(this)');
  const element_for_td_2 = document.createTextNode('');
  x++;
  const element_for_td_3 = get_btn('add', 'btn btn-primary', x, 'add_3_tds(this)');
  const element_for_td_4 = get_input('text', 'form-control', 'titles[]', 'e.g. price');
  const element_for_td_5 = get_input('text', 'form-control', 'xpaths_to_scrape_in_a_new_page[]', 'e.g. /html/body/div');
  const element_for_td_6 = get_btn('delete', 'btn btn-danger', '', 'delete_column_numbers_to_click_table(this)');
  const elements_for_tds = [element_for_td_1, element_for_td_2, element_for_td_3, element_for_td_4, element_for_td_5, element_for_td_6];
  add_tr_in_tbody(elements_for_tds, table.querySelector('tbody'));

  column_numbers_to_click_section.appendChild(table);

  add_btn.remove();
}


// pagination_section
const title_of_pagination_section = document.getElementById('title_of_pagination_section');
const pagination_inputs = document.getElementById('pagination_inputs');

function create_pagination_inputs (use_btn) {
  use_btn.remove();

  const label_for_text_of_parameter = get_label('parameter', 'mb-1');
  const text_of_parameter = get_input('text', 'form-control mb-1', 'parameter', 'e.g. page');
  text_of_parameter.setAttribute('value', 'page');
  const label_for_pages = get_label('how many pages?', 'mb-1');
  const pages = get_input('number', 'form-control mb-1', 'pages', 'e.g. 1');
  pages.setAttribute('min', '2');
  pages.setAttribute('step', '1');
  const not_use_btn = get_btn('not use', 'btn btn-danger mb-1', '', 'delete_pagination_inputs()');
  const elements = [label_for_text_of_parameter, text_of_parameter, label_for_pages, pages, not_use_btn];

  for (let i = 0; i < elements.length; i++) {
    pagination_inputs.appendChild(elements[i])
  }
}

function delete_pagination_inputs () {
  pagination_inputs.innerHTML = '';
  const use_btn = get_btn('use', 'btn btn-primary mb-1', '', 'create_pagination_inputs(this)');
  title_of_pagination_section.appendChild(use_btn);
}
