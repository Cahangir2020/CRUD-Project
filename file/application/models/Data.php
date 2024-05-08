<?php

class Data extends CI_MODEL 
{
    public function insert($table, $data)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}

    public function get_data($table)
	{
		$result = $this->db->get($table)->result();
		return $result;
	}

	public function update($table, $data, $id)
	{
		$result = $this->db->where('id', $id)->update($table, $data);
		return $result;
	}

	public function find_data($table, $id)
	{
		$result = $this->db->get_where($table, ['id' => $id])->row();
		return $result;
	}

	public function delete($table, $id)
	{
		$result = $this->db->delete($table, ['id' => $id]);
		return $result;
	}
}

?>