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
  const label_for_xpath_of_ajax_btn = get_label('xpath of ajax button', 'mb-1');
  const xpath_of_ajax_btn = get_input('text', 'form-control mb-1', 'xpath_of_ajax_btn', 'e.g. next');
  const not_use_btn = get_btn('not use', 'btn btn-danger mb-1', '', 'delete_ajax_inputs()');
  const elements = [label_for_xpath_of_ajax_btn, xpath_of_ajax_btn, not_use_btn];

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







// // column_numbers_to_click_section
// const column_numbers_to_click_section = document.getElementById('column_numbers_to_click_section');
// const add_btn_for_column_numbers_to_click = document.getElementById('add_btn_for_column_numbers_to_click');
//
// function add_3_tds (add_btn) {
//   const element_1 = document.createTextNode('');
//   const element_2 = document.createTextNode('');
//   const element_3 = document.createTextNode('');
//   const element_4 = get_input('text', 'form-control', 'titles[]', 'e.g. price');
//   const element_5 = get_input('text', 'form-control', `xpaths_to_scrape_in_new_pages[${add_btn.getAttribute('id')}][]`, 'e.g. /html/body/div');
//   const element_6 = get_btn('delete', 'btn btn-danger', '', 'delete_tr(this)');
//   const elements = [element_1, element_2, element_3, element_4, element_5, element_6];
//   add_tr_in_tbody(elements, add_btn.closest('table').querySelector('tbody'));
// }
//
// function get_column_number_from_xpath (input_for_xpath_of_element_to_click_in_the_table) {
//   const td_for_column_number_from_xpath = input_for_xpath_of_element_to_click_in_the_table.closest('td').nextElementSibling;
//   const td_part_of_xpath = input_for_xpath_of_element_to_click_in_the_table.value.match(/td\[[0-9]+\]/); //match method returns an array
//
//   if (td_part_of_xpath !== null) {
//     const column_number = td_part_of_xpath[0].match(/[0-9]+/);
//     td_for_column_number_from_xpath.innerHTML = column_number[0];
//   }else {
//     td_for_column_number_from_xpath.innerHTML = '';
//   }
// }
//
// let x = 0;
//
// add_btn_for_column_numbers_to_click.onclick = function () {
//   const table = get_table();
//
//   const element_for_th_1 = document.createTextNode('xpath of element to click in the table');
//   const element_for_th_2 = document.createTextNode('column number');
//   const element_for_th_3 = document.createTextNode('');
//   const element_for_th_4 = document.createTextNode('title');
//   const element_for_th_5 = document.createTextNode('xpath to scrape in a new page');
//   const element_for_th_6 = document.createTextNode('');
//   const elements_for_ths = [element_for_th_1, element_for_th_2, element_for_th_3, element_for_th_4, element_for_th_5, element_for_th_6];
//   add_tr_in_thead(elements_for_ths, table.querySelector('thead'));
//
//   const element_for_td_1 = get_input('text', 'form-control', 'xpaths_of_elements_to_click_in_the_table[]', 'e.g. /html/body/div');
//   element_for_td_1.setAttribute('onkeyup', 'get_column_number_from_xpath(this)');
//   const element_for_td_2 = document.createTextNode('');
//   x++;
//   const element_for_td_3 = get_btn('add', 'btn btn-primary', x, 'add_3_tds(this)');
//   const element_for_td_4 = get_input('text', 'form-control', 'titles[]', 'e.g. price');
//   const element_for_td_5 = get_input('text', 'form-control', `xpaths_to_scrape_in_new_pages[${x}][]`, 'e.g. /html/body/div');
//   const element_for_td_6 = get_btn('delete', 'btn btn-danger', '', 'delete_table(this)');
//   const elements_for_tds = [element_for_td_1, element_for_td_2, element_for_td_3, element_for_td_4, element_for_td_5, element_for_td_6];
//   add_tr_in_tbody(elements_for_tds, table.querySelector('tbody'));
//
//   column_numbers_to_click_section.appendChild(table);
// }

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

  const label_for_text_of_next_btn = get_label('text of next button', 'mb-1');
  const text_of_next_btn = get_input('text', 'form-control mb-1', 'text_of_next_btn', 'e.g. next');
  text_of_next_btn.setAttribute('value', '??');
  const label_for_pages = get_label('how many pages?', 'mb-1');
  const pages = get_input('number', 'form-control mb-1', 'pages', 'e.g. 1');
  pages.setAttribute('min', '2');
  pages.setAttribute('step', '1');
  const not_use_btn = get_btn('not use', 'btn btn-danger mb-1', '', 'delete_pagination_inputs()');
  const elements = [label_for_text_of_next_btn, text_of_next_btn, label_for_pages, pages, not_use_btn];

  for (let i = 0; i < elements.length; i++) {
    pagination_inputs.appendChild(elements[i])
  }
}

function delete_pagination_inputs () {
  pagination_inputs.innerHTML = '';
  const use_btn = get_btn('use', 'btn btn-primary mb-1', '', 'create_pagination_inputs(this)');
  title_of_pagination_section.appendChild(use_btn);
}


// start_scraping_btn
const scraping_form = document.getElementById('scraping_form');
let scraped_data;

$(function() {
  $('#start_scraping_btn').on('click', function(){
    // check if there is empty field in scraping_form
    const scraping_form_data = new FormData(scraping_form);
    let count = 0;

    scraping_form_data.forEach(function(value){
      if (value == '') {
        count++;
      }
    })

    // if there is not empty field, start scraping
    if (count !== 0) {
      alert('Please fill in ' + count + ' empty field(s) in scraping form.');
    } else {
      $('#result_table_section').html('');
      $('#chart_form').html('');
      $('#chart_section').html('');

      $.ajax({
        url: 'http://localhost:81/csr/zts5.php',
        type: 'POST',
        data: $('#scraping_form').serialize(),
        // Until request is completed
        beforeSend: function(){
          $('.loading').removeClass('hide');
        }
      }).done(function(data){
        $('.loading').addClass('hide');

        console.log(data);

        scraped_data = JSON.parse(data); // use try catch for JSON.parse error
        display_result_table(scraped_data);

        // can update default setting in paginathing.js
        $('#result_table #tbody_of_result_table').paginathing({
          perPage: 50,
          limitPagination: false,
          insertAfter: '#result_table',
          pageNumbers: true
        });

        display_chart_form();

        result_table_section.scrollIntoView();
      }).fail(function(XMLHttpRequest, textStatus, errorThrown){
        $('#result_table_section').html('failure');
      });
    }
  });
});


// result_table_section
const result_table_section = document.getElementById('result_table_section');

function delete_tr_for_result_table(delete_btn){
  delete_tr(delete_btn);

  for (var i = 1; i < scraped_data.length; i++) {
    if (delete_btn.getAttribute('id') == scraped_data[i][0]) {
      scraped_data.splice(i, 1);
    }
  }
}

function display_result_table (scraped_data) {
  const table = get_table();
  table.setAttribute('id', 'result_table');
  table.querySelector('tbody').setAttribute('class', 'list');
  table.querySelector('tbody').setAttribute('id', 'tbody_of_result_table');
  result_table_section.appendChild(table);

  const value_names = [];

  for (let i = 0; i < scraped_data.length; i++) {
    const tr = document.createElement('tr');

    if (i == 0) {
      for (let j = 0; j < scraped_data[i].length; j++) {
        const th = document.createElement('th');
        const text_node = document.createTextNode(scraped_data[0][j]);
        th.appendChild(text_node);
        tr.appendChild(th);
        value_names.push(scraped_data[0][j]);
      }

      const th_for_delete_btn = document.createElement('th');
      tr.appendChild(th_for_delete_btn);
      table.querySelector('thead').appendChild(tr);
    } else {
      for (let j = 0; j < scraped_data[i].length; j++) {
        const td = document.createElement('td');
        td.setAttribute('class', scraped_data[0][j]);
        const text_node = document.createTextNode(scraped_data[i][j]);
        td.appendChild(text_node);
        tr.appendChild(td);
      }

      const td = document.createElement('td');
      const delete_btn = get_btn('delete', 'btn btn-danger', i, 'delete_tr_for_result_table(this)');
      td.appendChild(delete_btn);
      tr.appendChild(td);
      table.querySelector('tbody').appendChild(tr);
    }
  }
}


// chart_form
const chart_form = document.getElementById('chart_form');

function display_chart_form () {
  // title_select_section
  const title_select_section = document.createElement('div');
  title_select_section.setAttribute('class', 'mb-1');
  title_select_section.setAttribute('id', 'title_select_section');

  const titles = document.createElement('select');
  titles.setAttribute('class', 'form-select');
  titles.setAttribute('name', 'title_number');
  titles.setAttribute('id', 'titles');

  for (let i = 0; i < scraped_data[0].length; i++) {
    const option = document.createElement('option');
    option.setAttribute('value', i);

    const text_node = document.createTextNode(scraped_data[0][i]);
    option.appendChild(text_node);

    titles.appendChild(option);
  }

  title_select_section.appendChild(titles);
  chart_form.appendChild(title_select_section);

  // chart_type_select_section
  const chart_type_select_section = document.createElement('div');
  chart_type_select_section.setAttribute('class', 'mb-1');
  chart_type_select_section.setAttribute('id', 'title_select_section');

  const chart_types = document.createElement('select');
  chart_types.setAttribute('class', 'form-select');
  chart_types.setAttribute('name', 'chart_type');
  chart_types.setAttribute('id', 'chart_types');

  const chart_types_array = ['pie', 'bar'];

  for (let i = 0; i < chart_types_array.length; i++) {
    const option = document.createElement('option');
    option.setAttribute('value', chart_types_array[i]);

    const text_node = document.createTextNode(chart_types_array[i]);
    option.appendChild(text_node);

    chart_types.appendChild(option);
  }

  chart_type_select_section.appendChild(chart_types);
  chart_form.appendChild(chart_type_select_section);

  // conditions_section
  const conditions_section = document.createElement('div');
  conditions_section.setAttribute('class', 'mb-1');
  conditions_section.setAttribute('id', 'conditions_section');
  chart_form.appendChild(conditions_section);

    // between_section
    const between_section = document.createElement('div');
    between_section.setAttribute('class', 'form-check mb-1');
    between_section.setAttribute('id', 'between_section');

    const checkbox_for_between = get_input('checkbox', 'form-check-input mb-1', '', '');
    checkbox_for_between.setAttribute('onchange', 'switch_between_inputs(this)');

    const label_for_between = get_label('between', 'form-check-label mb-1');

    const inputs_for_between = document.createElement('div');
    inputs_for_between.setAttribute('id', 'inputs_for_between');

    between_section.appendChild(checkbox_for_between);
    between_section.appendChild(label_for_between);
    between_section.appendChild(inputs_for_between);

  conditions_section.appendChild(between_section);

  // see_chart_btn
  const see_chart_btn = get_btn('see chart', 'btn btn-success mb-1', '', 'display_chart()');
  chart_form.appendChild(see_chart_btn);
}

function switch_between_inputs (checkbox_for_between) {
  if (checkbox_for_between.checked) {
    const label_for_min = get_label('min', 'mb-1');
    const input_for_min = get_input('number', 'form-control mb-1', 'min', 'e.g. 1');
    const label_for_max = get_label('max', 'mb-1');
    const input_for_max = get_input('number', 'form-control mb-1', 'max', 'e.g. 100');
    const elements_for_between = [label_for_min, input_for_min, label_for_max, input_for_max];

    for (let i = 0; i < elements_for_between.length; i++) {
      inputs_for_between.appendChild(elements_for_between[i]);
    }
  } else {
    inputs_for_between.innerHTML = '';
  }
}


// chart_section
const chart_section = document.getElementById('chart_section');

function display_chart () {
  // check if there is empty field in chart_form
  const chart_form_data = new FormData(chart_form);
  let count = 0;

  chart_form_data.forEach(function(value){
    if (value == '') {
      count++;
    }
  })

  // if there is not empty field, display a chart
  if (count !== 0) {
    alert('Please fill in ' + count + ' empty field(s) in chart form.');
  } else {
    chart_section.innerHTML = '';

    // get scraped_data_for_title_number
    const title_number = chart_form_data.get('title_number');
    const scraped_data_for_title_number = [];

    for (var i = 1; i < scraped_data.length; i++) {
      scraped_data_for_title_number.push(scraped_data[i][title_number]);
    }

    // get distinct data
    const counted_data = {};

    for(let i = 0; i < scraped_data_for_title_number.length; i++){
      var key = scraped_data_for_title_number[i];

      if (counted_data[key] == undefined) {
        counted_data[key] = 0;
      }

      counted_data[key]++;
    }

    // apply desc ...?

    // get keys from counted_data
    let keys = [];

    for (key in counted_data){
      keys.push(key);
    }

    // get values from counted_data
    let values = [];

    for (key in counted_data){
      values.push(counted_data[key]);
    }

    // chart
    const canvas = document.createElement('canvas');
    canvas.setAttribute('id', 'chart');
    chart_section.appendChild(canvas);

    var chart = new Chart(canvas, {
      type: 'pie',
      data: {
        labels: keys,
        datasets: [{
          backgroundColor: background_colors, //background_colors.js
          data: values
        }]
      },
      options: {
        title: {
          display: true,
          text: scraped_data[0][title_number] + ` (total ${scraped_data_for_title_number.length})`
        }
      }
    });

    // not work
    chart_section.scrollIntoView();
    // canvas.scrollIntoView();
  }
}
