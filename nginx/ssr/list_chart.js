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


// result_table_section
const result_table_section = document.getElementById('result_table_section');

function delete_tr_for_result_table(delete_btn){
  delete_tr(delete_btn);

  for (var i = 1; i < data.length; i++) {
    if (delete_btn.getAttribute('id') == data[i][0]) {
      data.splice(i, 1);
    }
  }
}

function display_result_table (data) {
  const table = get_table();
  table.setAttribute('id', 'result_table');
  table.querySelector('tbody').setAttribute('class', 'list');
  table.querySelector('tbody').setAttribute('id', 'tbody_of_result_table');
  result_table_section.appendChild(table);

  const value_names = [];

  for (let i = 0; i < data.length; i++) {
    const tr = document.createElement('tr');

    if (i == 0) {
      for (let j = 0; j < data[i].length; j++) {
        const th = document.createElement('th');
        const text_node = document.createTextNode(data[0][j]);
        th.appendChild(text_node);
        tr.appendChild(th);
        value_names.push(data[0][j]);
      }

      const th_for_delete_btn = document.createElement('th');
      tr.appendChild(th_for_delete_btn);
      table.querySelector('thead').appendChild(tr);
    } else {
      for (let j = 0; j < data[i].length; j++) {
        const td = document.createElement('td');
        td.setAttribute('class', data[0][j]);
        const text_node = document.createTextNode(data[i][j]);
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

display_result_table(data);

$(function() {
  $('#result_table #tbody_of_result_table').paginathing({
    perPage: 50,
    limitPagination: false,
    insertAfter: '#result_table',
    pageNumbers: true
  });
});


//
const chart_form = document.getElementById('chart_form');
const group_by_a_column_radio = document.querySelector('#group_by_a_column_radio');
const group_by_a_column_section = document.querySelector('#group_by_a_column_section');
const range_radio = document.querySelector('#range_radio');
const range_section = document.querySelector('#range_section');
const keyword_radio = document.querySelector('#keyword_radio');
const keyword_section = document.querySelector('#keyword_section');
const see_chart_btn = document.getElementById('see_chart_btn');
const chart_section = document.getElementById('chart_section');


// title select
function append_titles(section) {
  const select = document.createElement('select');
  select.setAttribute('class', 'form-select mt-1 mb-1');
  select.setAttribute('name', 'title_number')

  for (let i = 0; i < data[0].length; i++) {
    const option = document.createElement('option');
    option.setAttribute('value', i);
    const option_text = document.createTextNode(data[0][i]);
    option.appendChild(option_text);
    select.appendChild(option);
  }

  section.appendChild(select);
}


//
group_by_a_column_radio.onchange = function () {
  //
  range_section.innerHTML = '';
  keyword_section.innerHTML = '';

  //
  append_titles(group_by_a_column_section);
}


//
range_radio.onchange = function () {
  //
  group_by_a_column_section.innerHTML = '';
  keyword_section.innerHTML = '';

  //
  append_titles(range_section);

  //
  const add_btn = get_btn('add', 'btn btn-primary mb-1', 'range_add_btn', 'add_range()');
  range_section.appendChild(add_btn);

  //
  const min = get_input('number', 'form-control', 'mins[]', 'min');
  const max = get_input('number', 'form-control', 'maxs[]', 'max');
  const delete_btn = get_btn('delete', 'btn btn-danger', '', 'delete_tr(this)');
  const table = get_table();
  range_section.appendChild(table);
  table.querySelector('tbody').setAttribute('id', 'tbody_of_range_table');
  const elements_for_tds = [min, max, delete_btn];
  add_tr_in_tbody(elements_for_tds, tbody_of_range_table);
}

function add_range () {
  const min = get_input('number', 'form-control', 'mins[]', 'min');
  const max = get_input('number', 'form-control', 'maxs[]', 'max');
  const delete_btn = get_btn('delete', 'btn btn-danger', '', 'delete_tr(this)');
  const elements_for_tds = [min, max, delete_btn];
  add_tr_in_tbody(elements_for_tds, tbody_of_range_table);
}


//
keyword_radio.onchange = function () {
  //
  group_by_a_column_section.innerHTML = '';
  range_section.innerHTML = '';

  //
  append_titles(keyword_section);

  //
  const add_btn = get_btn('add', 'btn btn-primary mb-1', 'keyword_add_btn', 'add_keyword_input()');
  keyword_section.appendChild(add_btn);

  //
  const keyword_input = get_input('text', 'form-control', 'keywords[]', 'keyword');
  const delete_btn = get_btn('delete', 'btn btn-danger', '', 'delete_tr(this)');
  const table = get_table();
  keyword_section.appendChild(table);
  table.querySelector('tbody').setAttribute('id', 'tbody_of_keyword_table');
  const elements_for_tds = [keyword_input, delete_btn];
  add_tr_in_tbody(elements_for_tds, tbody_of_keyword_table);
}


function add_keyword_input () {
  const keyword_input = get_input('text', 'form-control', 'keywords[]', 'keyword');
  const delete_btn = get_btn('delete', 'btn btn-danger', '', 'delete_tr(this)');
  const elements_for_tds = [keyword_input, delete_btn];
  add_tr_in_tbody(elements_for_tds, tbody_of_keyword_table);
}


//
see_chart_btn.onclick = function () {
  const title_number = parseInt(document.querySelector('select[name="title_number"]').value);

  if (group_by_a_column_radio.checked) {
    const data_for_title_number = [];
    let total = 0;

    for (let i = 1; i < data.length; i++) {
      data_for_title_number.push(data[i][title_number]);
      total++;
    }

    // get distinct data
    const counted_data = {};

    for (let i = 0; i < data_for_title_number.length; i++) {
      var key = data_for_title_number[i];

      if (counted_data[key] == undefined) {
        counted_data[key] = 0;
      }

      counted_data[key]++;
    }

    // get labels from counted_data
    let labels = [];

    for (key in counted_data){
      labels.push(key);
    }

    // get values from counted_data
    let values = [];

    for (key in counted_data){
      values.push(counted_data[key]);
    }

    display_chart(labels, values, title_number, total)
  } else if (range_radio.checked) {
    const mins = document.getElementsByName('mins[]');
    const maxs = document.getElementsByName('maxs[]');

    if (mins.length != 0 && maxs.length != 0) {
      let empty_check_flag;

      for (let i = 0; i < mins.length; i++) {
        if (mins[i].value == '' || maxs[i].value == '') {
          alert('fill in blanks');
          empty_check_flag = false;
          break;
        }

        empty_check_flag = true
      }

      if (empty_check_flag == true) {
        //
        let ranges = [];
        let range_groups = [];

        for (let i = 0; i < mins.length; i++) {
          ranges.push(mins[i].value + ' - ' + maxs[i].value);
          range_groups.push(new Array());
        }

        //
        let unsorted_data = [];
        let total = 0;

        for (let i = 1; i < data.length; i++) {
          unsorted_data.push(data[i]);
          total++;
        }

        //
        for (let i = 0; i < range_groups.length; i++) {
          for (let j = 0; j < unsorted_data.length; j++) {
            if (unsorted_data[j][title_number].match(/[0-9]+,[0-9]+/) != null) {
              if (unsorted_data[j][title_number].replace(/,/g, '') >= parseFloat(mins[i].value) && unsorted_data[j][title_number].replace(/,/g, '') <= parseFloat(maxs[i].value)) {
                range_groups[i].push(unsorted_data[j]);
                unsorted_data.splice(j, 1);
                j--;
              }
            } else {
              if (unsorted_data[j][title_number] >= parseFloat(mins[i].value) && unsorted_data[j][title_number] <= parseFloat(maxs[i].value)) {
                range_groups[i].push(unsorted_data[j]);
                unsorted_data.splice(j, 1);
                j--;
              }
            }
          }
        }

        if (unsorted_data.length != 0) {
          ranges.push('the other');
          range_groups.push(unsorted_data);
        }

        const labels = ranges;
        let values = [];

        range_groups.forEach(function(element){
          values.push(element.length);
        })

        display_chart(labels, values, title_number, total);
      }
    }
  } else if (keyword_radio.checked) {
    const keyword_inputs = document.getElementsByName('keywords[]');

    if (keyword_inputs.length != 0) {
      let empty_check_flag;

      for (let i = 0; i < keyword_inputs.length; i++) {
        if (keyword_inputs[i].value == '') {
          alert('fill in blanks');
          empty_check_flag = false;
          break;
        }

        empty_check_flag = true
      }

      if (empty_check_flag == true) {
        //
        let keywords = [];
        let keyword_groups = [];

        for (let i = 0; i < keyword_inputs.length; i++) {
          keywords.push(keyword_inputs[i].value);
          keyword_groups.push(new Array());
        }

        //
        let unsorted_data = [];
        let total = 0;

        for (let i = 1; i < data.length; i++) {
          unsorted_data.push(data[i]);
          total++;
        }

        //
        for (let i = 0; i < keyword_groups.length; i++) {
          for (let j = 0; j < unsorted_data.length; j++) {
            if (unsorted_data[j][title_number].includes(keywords[i])) {
              keyword_groups[i].push(unsorted_data[j]);
              unsorted_data.splice(j, 1);
              j--;
            }
          }
        }

        if (unsorted_data.length != 0) {
          keywords.push('the other');
          keyword_groups.push(unsorted_data);
        }

        const labels = keywords;
        let values = [];

        keyword_groups.forEach(function(element){
          values.push(element.length);
        })

        display_chart(labels, values, title_number, total);
      }
    }
  }
}


//
function display_chart(labels, values, title_number, total) {
  chart_section.innerHTML = '';

  const canvas = document.createElement('canvas');
  canvas.setAttribute('id', 'chart');
  chart_section.appendChild(canvas);

  var chart = new Chart(canvas, {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        backgroundColor: background_colors,
        data: values
      }]
    },
    options: {
      title: {
        display: true,
        text: data[0][title_number] + ` (total ${total})`
      }
    }
  });

  chart_section.scrollIntoView();
}
