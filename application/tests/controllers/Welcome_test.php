<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
  public function setUp() {
    $this->resetInstance();
    $this->CI->load->database();
    $this->CI->db->query('DELETE FROM todo_items');
    $this->CI->load->model('TodoItem_model');
  }

	public function test_index()
	{
		$output = $this->request('GET', ['Welcome', 'index']);
    $this->assertContains('<h1>Todo Items</h1>', $output);
    $this->assertRegExp('/<ul>\s*<\/ul>/', $output);
	}

  public function test_index_shows_saved_items()
  {
    $this->CI->TodoItem_model->create('Something to do');

    $output = $this->request('GET', ['Welcome', 'index']);
    $this->assertContains('<li>Something to do</li>', $output);
  }

	public function test_method_404()
	{
		$this->request('GET', ['Welcome', 'method_not_exist']);
		$this->assertResponseCode(404);
	}

	public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
}
